/*!
 * NgEditableGrid v1.1.1
 * Copyright : Copyright (c) 2014
 * Company : AIRFRANCE
 * author HMULUDIKI
 */

//Define our editable grid
function NgEditableGrid($scope, name, config){
	EditableGrid.call(this,name, config);
	this.scope = $scope;
	this.serverPageSize = 200;
}
NgEditableGrid.prototype = new EditableGrid();

NgEditableGrid.prototype.init = function (name, config)
{
	if (typeof name != "string" || (typeof config != "object" && typeof config != "undefined")) {
		alert("The EditableGrid constructor takes two arguments:\n- name (string)\n- config (object)\n\nGot instead " + (typeof name) + " and " + (typeof config) + ".");
	};

	// override default properties with the ones given
	if (typeof config != 'undefined') for (var p in config) this[p] = config[p];

	this.Browser = {
			IE:  !!(window.attachEvent && navigator.userAgent.indexOf('Opera') === -1),
			Opera: navigator.userAgent.indexOf('Opera') > -1,
			WebKit: navigator.userAgent.indexOf('AppleWebKit/') > -1,
			Gecko: navigator.userAgent.indexOf('Gecko') > -1 && navigator.userAgent.indexOf('KHTML') === -1,
			MobileSafari: !!navigator.userAgent.match(/Apple.*Mobile.*Safari/)
	};

	if (typeof this.detectDir != 'function') {
		var error = new Error();
		alert("Who is calling me now ? " + error.stack);
	}

	// private data
	this.name = name;
	this.columns = [];
	this.data = [];
	this.dataUnfiltered = null; // non null means that data is filtered
	this.xmlDoc = null;
	this.sortedColumnName = -1;
	this.sortDescending = false;
	this.baseUrl = this.detectDir();
	this.nbHeaderRows = 1;
	this.lastSelectedRowIndex = -1;
	this.currentPageIndex = 0;
	this.currentFilter = null;
	this.currentContainerid = null; 
	this.currentClassName = null; 
	this.currentTableid = null;

	if (this.enableSort) {
		this.sortUpImage = new Image();
		if ( typeof config != "undefined" && typeof config['sortIconUp'] != "undefined" ) 
			this.sortUpImage.src = config['sortIconUp'];
		else
			this.sortUpImage.src = this.baseUrl + "/img/bullet_arrow_up.png";


		this.sortDownImage = new Image();
		if ( typeof config != "undefined" && typeof config['sortIconDown'] != "undefined" ) 
			this.sortDownImage.src = config['sortIconDown'];
		else
			this.sortDownImage.src = this.baseUrl + "/img/bullet_arrow_down.png";
	}

	// restore stored parameters, or use default values if nothing stored
	this.currentPageIndex = this.localisset('pageIndex') ? parseInt(this.localget('pageIndex')) : 0;
	this.sortedColumnName = this.localisset('sortColumnIndexOrName') ? this.localget('sortColumnIndexOrName') : -1;
	this.sortDescending = this.localisset('sortColumnIndexOrName') && this.localisset('sortDescending') ? this.localget('sortDescending') == 'true' : false;
	this.currentFilter = this.localisset('filter') ? this.localget('filter') : null;
};

/**
 * Detects the directory when the js sources can be found
 * @private
 */
NgEditableGrid.prototype.detectDir = function() 
{
	var pathArray = location.href.split( '/' );
	var protocol = pathArray[0];
	var host = pathArray[2];
	var contextName = '/cgotoolWeb';
	var url = protocol + '//' + host+contextName;	
	return url;
};


/**
 * Sets the serverpage size
 * @param {Integer} pageSize Integer page size
 */
NgEditableGrid.prototype.setServerPageSize = function(serverPageSize)
{
	this.serverPageSize = parseInt(serverPageSize);
	if (isNaN(this.serverPageSize)) this.serverPageSize = 0;
	this.currentPageIndex = 0;
	this.refreshGrid();
};

/**
 * Compute the json object retrieve back from the ajax call
 * @param {Object}
 */
NgEditableGrid.prototype.onloadJSON = function(response) 
{
	// register the function that will be called when the jsond data has been fully loaded
	this.tableLoaded = function() { 
		//displayMessage("Grid loaded from JSON: " + this.getRowCount() + " row(s)"); 
		this.initializeGrid();
	};
	
	// Map incoming data to the editablegrid json format
	var json = {};
	var data = [];
	var content = response.content;
	if(undefined == content){
		content=response;
	}
	for(var i = 0; i < content.length; i++ ){		
		data.push({id: content[i].tech_id, values:content[i] });
	}
	
	//Set pagination data
	var paginator={};
	if(response.page){
		paginator.pagecount = response.page.totalPages;
		paginator.totalrowcount = response.page.totalElements;
		paginator.unfilteredRowCount = response.page.totalElements;		
	}
	
	json.data = data;
	json.paginator = paginator;
	this.scope.paginator = paginator;

	// load JSON URL
	this.processJSON(json);
	
	this.tableLoaded();
};


/**
 * update paginator whenever the table is rendered (after a sort, filter, page change, etc.)
 */
NgEditableGrid.prototype.tableRendered = function() {};

/**
 * Use to add a new row in the datagrid
 */
NgEditableGrid.prototype.add = function() 
{
};


//************************************Redifined functions*********************************************//

NgEditableGrid.prototype._addUrlParameters = function(baseUrl, dataOnly)
{
	// we add a dummy timestamp parameter to avoid getting an old version from the browser's cache
	var sep = baseUrl.indexOf('?') >= 0 ? '&' : '?'; 
	baseUrl += sep + (new Date().getTime());

	if (!this.serverSide) return baseUrl;

	// add pagination, filtering and sorting parameters to the base url
	return baseUrl
	+ "&page=" + (this.currentPageIndex + 1)
	+ "&size=" + (this.serverPageSize + 1)
	+ "&filter=" + (this.currentFilter ? encodeURIComponent(this.currentFilter) : "")
	+ "&sort=" + (this.sortedColumnName && this.sortedColumnName != -1 ? encodeURIComponent(this.sortedColumnName) : "")
	+ "&asc=" + (this.sortDescending ? 0 : 1)
	+ (dataOnly ? '&data_only=1' : '');
};

//redefine displayEditor to setup datepicker
DateCellEditor.prototype.displayEditor = function(element, htmlInput) 
{
	// call base method
	TextCellEditor.prototype.displayEditor.call(this, element, htmlInput);

	jQuery(htmlInput).datepicker({ 
		dateFormat: this.editablegrid.dateFormat == "EU" ? "dd/mm/y" : "mm/dd/y",
				beforeShow: function() {
					// the field cannot be blurred until the datepicker has gone away
					// otherwise we get the "missing instance data" exception
					this.onblur_backup = this.onblur;
					this.onblur = null;
				},
				onClose: function(dateText) {
					// apply date if any, otherwise call original onblur event
					if (dateText != '') this.celleditor.applyEditing(htmlInput.element, dateText);
					else if (this.onblur_backup != null) this.onblur_backup();

				}
	}).datepicker('show');
};


/**
 * Insert row with given id and data at given location
 * We know rowIndex is valid, unless the table is empty
 * @private
 */
NgEditableGrid.prototype._insert = function(rowIndex, offset, rowId, cellValues, rowAttributes, dontSort)
{
	var originalRowId = null;
	var originalIndex = 0;
	var _data = this.dataUnfiltered == null ? this.data : this.dataUnfiltered;

	if (typeof this.data[rowIndex] != "undefined") {
		originalRowId = this.data[rowIndex].id;
		originalIndex = this.data[rowIndex].originalIndex + offset;
	}

	// append row in DOM (needed for attach mode)
	if (this.currentContainerid == null) {
		var tr = this.tBody.insertRow(rowIndex + offset);
		tr.rowId = rowId;
		tr.id = this._getRowDOMId(rowId);
		for (var c = 0; c < this.columns.length; c++) tr.insertCell(c);
	}

	// build data for new row
	var rowData = { visible: true, originalIndex: originalIndex, id: rowId };
	if (rowAttributes) for (var attributeName in rowAttributes) rowData[attributeName] = rowAttributes[attributeName]; 
	rowData.columns = [];
	for (var c = 0; c < this.columns.length; c++) {
		var cellValue = this.columns[c].name in cellValues ? cellValues[this.columns[c].name] : "";
		rowData.columns.push(this.getTypedValue(c, cellValue));
	}

	// update originalRowIndex
	for (var r = 0; r < _data.length; r++) if (_data[r].originalIndex >= originalIndex) _data[r].originalIndex++;

	// append row in data
	this.data.splice(rowIndex + offset, 0, rowData);
	if (this.dataUnfiltered != null) {
		if (originalRowId === null) this.dataUnfiltered.splice(rowIndex + offset, 0, rowData);
		else for (var r = 0; r < this.dataUnfiltered.length; r++) if (this.dataUnfiltered[r].id == originalRowId) { this.dataUnfiltered.splice(r + offset, 0, rowData); break; }
	}

	// refresh grid
	//this.refreshGrid();
	this.renderGrid(this.gridid, "tab_v4 odd-even hover bgcolor_darkblue", "tablegrid");
	// sort and filter table
	//if (!dontSort) this.sort();
	//this.filter();
};


/**
 * Checks validity of a date string 
 * @private
 */
NgEditableGrid.prototype.checkDate = function(strDate, strDatestyle) 
{
	strDatestyle = strDatestyle || this.dateFormat;
	strDatestyle = strDatestyle || "EU";
	
	var strDate;
	var strDateArray;
	var strDay;
	var strMonth;
	var strYear;
	var intday;
	var intMonth;
	var intYear;
	var booFound = false;
	var strSeparatorArray = new Array("-"," ","/",".");
	var intElementNr;
	var err = 0;
	
	var strMonthArray = this.shortMonthNames;
	strMonthArray = strMonthArray || ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	
	if (!strDate || strDate.length < 1) return 0;

	for (intElementNr = 0; intElementNr < strSeparatorArray.length; intElementNr++) {
		if (strDate.indexOf(strSeparatorArray[intElementNr]) != -1) {
			strDateArray = strDate.split(strSeparatorArray[intElementNr]);
			if (strDateArray.length != 3) return 1;
			else {
				strDay = strDateArray[0];
				strMonth = strDateArray[1];
				strYear = strDateArray[2];
			}
			booFound = true;
		}
	}
	
	if (booFound == false) {
		if (strDate.length <= 5) return 1;
		strDay = strDate.substr(0, 2);
		strMonth = strDate.substr(2, 2);
		strYear = strDate.substr(4);
	}

	// if (strYear.length == 2) strYear = '20' + strYear;

	// US style
	if (strDatestyle == "US") {
		strTemp = strDay;
		strDay = strMonth;
		strMonth = strTemp;
	}
	
	// get and check day
	intday = parseInt(strDay, 10);
	if (isNaN(intday)) return 2;

	// get and check month
	intMonth = parseInt(strMonth, 10);
	if (isNaN(intMonth)) {
		for (i = 0;i<12;i++) {
			if (strMonth.toUpperCase() == strMonthArray[i].toUpperCase()) {
				intMonth = i+1;
				strMonth = strMonthArray[i];
				i = 12;
			}
		}
		if (isNaN(intMonth)) return 3;
	}
	if (intMonth>12 || intMonth<1) return 5;

	// get and check year
	intYear = parseInt(strYear, 10);
	if (isNaN(intYear)) return 4;
	if (intYear < 70) { intYear = 2000 + intYear; strYear = '' + intYear; } // 70 become 1970, 69 becomes 1969, as with PHP's date_parse_from_format
	if (intYear < 100) { intYear = 1900 + intYear; strYear = '' + intYear; }
	if (intYear < 1900 || intYear > 2100) return 11;
	
	// check day in month
	if ((intMonth == 1 || intMonth == 3 || intMonth == 5 || intMonth == 7 || intMonth == 8 || intMonth == 10 || intMonth == 12) && (intday > 31 || intday < 1)) return 6;
	if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11) && (intday > 30 || intday < 1)) return 7;
	if (intMonth == 2) {
		if (intday < 1) return 8;
		if (LeapYear(intYear) == true) { if (intday > 29) return 9; }
		else if (intday > 28) return 10;
	}

	var sortDate = Date.parse(intMonth + "/" + intday + "/" + intYear);
	// return formatted date
	return { 
		//formattedDate: (strDatestyle == "US" ? strMonthArray[intMonth-1] + " " + intday+" " + strYear : intday + " " + strMonthArray[intMonth-1]/*.toLowerCase()*/ + " " + strYear),
		//dd/MM/yy
		formattedDate: strDate,
		sortDate: sortDate,
		dbDate: intYear + "-" + intMonth + "-" + intday 
	};
};

//redefine displayEditor to setup datepicker
DateCellEditor.prototype.displayEditor = function(element, htmlInput) 
{
	// call base method
	TextCellEditor.prototype.displayEditor.call(this, element, htmlInput);

	jQuery(htmlInput).datepicker({ 
		minDate: new Date(),
		dateFormat: this.editablegrid.dateFormat == "EU" ? "dd/mm/y" : "mm/dd/y",
				beforeShow: function() {
					// the field cannot be blurred until the datepicker has gone away
					// otherwise we get the "missing instance data" exception
					this.onblur_backup = this.onblur;
					this.onblur = null;
				},
				onClose: function(dateText) {
					// apply date if any, otherwise call original onblur event
					if (dateText != '') this.celleditor.applyEditing(htmlInput.element, dateText);
					else if (this.onblur_backup != null) this.onblur_backup();

				}
	}).datepicker('show');
};

//Use to edit a column, redefine if status not history ok for editing else not editing
CellEditor.prototype.edit = function(rowIndex, columnIndex, element, value) 
{
	//Test history
	try{
		var status = (typeof(this.editableGrid.getRowStatus) === "function")?this.editableGrid.getRowStatus(rowIndex):"";	
		if(status == "history")
			return;
	}catch(e){
		//Do nothing
	}

	
	// tag element and remember all the things we need to apply/cancel edition
	element.isEditing = true;
	element.rowIndex = rowIndex; 
	element.columnIndex = columnIndex;

	// call the specialized getEditor method
	var editorInput = this.getEditor(element, value);
	if (!editorInput) return false;

	// give access to the cell editor and element from the editor widget
	editorInput.element = element;
	editorInput.celleditor = this;

	// listen to pressed keys
	// - tab does not work with onkeyup (it's too late)
	// - on Safari escape does not work with onkeypress
	// - with onkeydown everything is fine (but don't forget to return false)
	editorInput.onkeydown = function(event) {

		event = event || window.event;

		// ENTER: apply value
		if (event.keyCode == 13) {

			// backup onblur then remove it: it will be restored if editing could not be applied
			this.onblur_backup = this.onblur; 
			this.onblur = null;
			if (this.celleditor.applyEditing(this.element, this.celleditor.getEditorValue(this)) === false) this.onblur = this.onblur_backup; 
			return false;
		}

		// ESC: cancel editing
		if (event.keyCode == 27) { 
			this.onblur = null; 
			this.celleditor.cancelEditing(this.element); 
			return false; 
		}
		
		// shift and TAB: apply value
		if (event.shiftKey && event.keyCode == 9) {
			this.celleditor.editablegrid.shiftedTabPressed(rowIndex, columnIndex, element);
			return false;
		}
		
		// shift and TAB: apply value
		if (event.keyCode == 9) {
			this.celleditor.editablegrid.tabPressed(rowIndex, columnIndex, element);
			return false;
		}
	};

	// if simultaneous edition is not allowed, we cancel edition when focus is lost
	if (!this.editablegrid.allowSimultaneousEdition) editorInput.onblur = this.editablegrid.saveOnBlur ?
			function(event) { 

		// backup onblur then remove it: it will be restored if editing could not be applied
		this.onblur_backup = this.onblur; 
		this.onblur = null;
		if (this.celleditor.applyEditing(this.element, this.celleditor.getEditorValue(this)) === false) this.onblur = this.onblur_backup; 
	}
	:
		function(event) { 
		this.onblur = null; 
		this.celleditor.cancelEditing(this.element); 
	};

	// display the resulting editor widget
	this.displayEditor(element, editorInput);

	// give focus to the created editor
	editorInput.focus();
};

/**
 * Tab press handler
 * @param {Object} e
 * @private
 */
NgEditableGrid.prototype.tabPressed = function(rowIndex, columnIndex, element) 
{
	with (this) {

		// get row and column index from the clicked cell
		var target;
		
		// get cell position in table
		if(columnIndex < getColumnCount()-1){
			columnIndex++;
		}else{
			if(rowIndex <getTotalRowCount()-1){
				rowIndex++;
			}
			columnIndex=0;
		}

		var column = columns[columnIndex];
		if (column) {
			target = getCell(rowIndex, columnIndex);
			// if another row has been selected: callback
			if (rowIndex > -1 && rowIndex != lastSelectedRowIndex) {
				rowSelected(lastSelectedRowIndex, rowIndex);				
				lastSelectedRowIndex = rowIndex;
			}

			// edit current cell value
			if (!column.editable) { readonlyWarning(column); }
			else {
				if (rowIndex < 0) { 
					if (column.headerEditor && isHeaderEditable(rowIndex, columnIndex)) 
						column.headerEditor.edit(rowIndex, columnIndex, target, column.label);
				}
				else if (column.cellEditor && isEditable(rowIndex, columnIndex))
					column.cellEditor.edit(rowIndex, columnIndex, target, getValueAt(rowIndex, columnIndex));
			}
		}
	}
};
/**
 * Shift Tab press handler
 * @param {Object} e
 * @private
 */
NgEditableGrid.prototype.shiftedTabPressed = function(rowIndex, columnIndex, element) 
{
	with (this) {

		// get row and column index from the clicked cell
		var target;
		
		// get cell position in table
		if(columnIndex > 0){
			columnIndex--;
		}else{
			if(rowIndex > 0){
				rowIndex--;
			}			
			columnIndex=0;
		}

		var column = columns[columnIndex];
		if (column) {
			target = getCell(rowIndex, columnIndex);
			// if another row has been selected: callback
			if (rowIndex > -1 && rowIndex != lastSelectedRowIndex) {
				rowSelected(lastSelectedRowIndex, rowIndex);				
				lastSelectedRowIndex = rowIndex;
			}

			// edit current cell value
			if (!column.editable) { readonlyWarning(column); }
			else {
				if (rowIndex < 0) { 
					if (column.headerEditor && isHeaderEditable(rowIndex, columnIndex)) 
						column.headerEditor.edit(rowIndex, columnIndex, target, column.label);
				}
				else if (column.cellEditor && isEditable(rowIndex, columnIndex))
					column.cellEditor.edit(rowIndex, columnIndex, target, getValueAt(rowIndex, columnIndex));
			}
		}
	}
};