jQuery( document ).ready(function($) {
	$( ".accordion" ).accordion({
		collapsible: true,
		heightStyle: "content",
	});
	$( ".accordion_close" ).accordion({
		collapsible: true,
		heightStyle: "content",
		active: false
	});
	$( "#datepicker" ).datepicker({
		dateFormat: 'dd/mm/yy'
	});
	$( ".btnT1" ).click(function() {
		var dom = $("#textEditor");
		$(dom).modal({
			overlayClose:true,
			zIndex: 5000,
			opacity:80,
			overlayCss: {backgroundColor:"#000"},
			onOpen: function (dialog) {
				dialog.overlay.fadeIn('fast', function () {
					dialog.data.hide();
					dialog.container.fadeIn('fast', function () {
						dialog.data.slideDown('slow');	 
					});
				});
			},
			onClose: function (dialog) {
				dialog.data.fadeOut('slow', function () {
					dialog.container.hide('fast', function () {
						dialog.overlay.slideUp('fast', function () {
							$.modal.close();
						});
					});
				});
			},
		});
	});
	
});