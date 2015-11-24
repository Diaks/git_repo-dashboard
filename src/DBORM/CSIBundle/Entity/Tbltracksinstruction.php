<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;
use General\WidgetBundle\Controller\WidgetController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use General\WidgetBundle\Tests\simple_html_dom;
use Doctrine\ORM\Query\AST\Functions\SubstringFunction;
use \DateTime;
require('../src/General/WidgetBundle/Tests/simple_html_dom.php');


/**
 * Tbltracksinstruction
 *
 * @ORM\Table(name="TblTracksInstruction", indexes={@ORM\Index(name="IDX_36E3C6212E862701", columns={"FK_subsector_id"})})
 * @ORM\Entity
 */
class Tbltracksinstruction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=-1, nullable=true)
     */
    private $comment;

    /**
     * @var \Tblsubsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsubsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_subsector_id", referencedColumnName="PK_SubSector_code")
     * })
     */
    private $fkSubsector;

    private $conn, $WidgetController, $simple_html_dom;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    	//$this->simple_html_dom = new simple_html_dom();
    }
    
    public function getKLMSubsect($subsect){
    	return $this->conn->fetchColumn(
    			"SELECT s.KLM_subsec_code
    					FROM Tblsubsectorklmcode s
    					WHERE s.FK_subsector_id = '".$subsect."'");
    }
    
    public function getInstBySubsect($subsect){
    	$klmCode = $this->getKLMSubsect($subsect);
    	 
    	$table = array();
    	 
    	$html = file_get_html('http://172.30.194.123:8080/Jointweb/WebQueries/wqWebTraksInstructView/default.asp?SubSector='.$klmCode);
    	//$html=mb_convert_encoding($html,'utf8','windows-1251');
    	
    	foreach($html->find('table') as $tables) {
    		foreach($tables->find('tr.PostCalcTrOdd') as $row) {
    			$id = $row->find('td',0)->plaintext;
    			$user = $row->find('td',4)->plaintext;
    			$awbPre = $row->find('td',5)->plaintext;
    			$awbNumber = $row->find('td',6)->plaintext;
    			$awb = $awbPre.'/'.$awbNumber;
    			$uld = $row->find('td',7)->plaintext;
    			$station = $row->find('td',8)->plaintext;
    			$flightPre = $row->find('td',9)->plaintext;
    			$flightNumber = $row->find('td',10)->plaintext;
    			$flight = $flightPre.$flightNumber;
    			$flight_date = $row->find('td',12)->plaintext;
    			$flight_date = substr($flight_date, 0,8);
    			if($flight_date=='19000101'){
    				$flight_date = null;
    			}
    			else{
    				$day = substr($flight_date, -2);
    				$month = substr($flight_date, 4,2);
    				$year= substr($flight_date, 0,4);
    				$flight_date = $day.'/'.$month.'/'.$year;
    			}
    			 
    			$action = $row->find('td',13)->plaintext;
    			$comment = mb_convert_encoding($row->find('td',14)->plaintext,'utf8');
    			if($comment == null && $comment=' '){
    				$comment='     ';
    			}
    			$table[] = array("id"=>$id, "user_name"=>$user,"awb"=>$awb, "uld"=>$uld, "station"=>$station, "flight"=>$flight,"flight_date"=>$flight_date, "action"=>$action,"comment"=>$comment, "edit"=>"");
    		}
    	}
    	return $table;
    }
    
    public function setInst($dataBaseAction,$id,$start,$subSector,$userName,$AWBPrefix,$AWBNumber,$ULD,$station,$flightPrefix,$flightNumber,$flightNumberSuffix,$flightDate,$action,$comment){
    	
    	//DataBaseAction: U = Update, A = Add, D = Delete
    	$sepparator = '/';
    	if(isset($start) && $start != ' '){
    		$parts = explode($sepparator, $start);
    		$start = $parts[2].$parts[1].$parts[0].' '.date('His');
    	}
    	else{
    		$start = date('Ymd His');
    	}
    	
    	if(isset($flightDate) && $flightDate != ' '){
    		$parts = explode($sepparator, $flightDate);
    		$flightDate = $parts[2].$parts[1].$parts[0].' 000000';
    	}
    	else{
    		$flightDate = date('19000101 000000');
    	}
    	$sConnection = "http://172.30.194.123:8080/Jointweb/WebQueries/wqWebTraksInstructMaint/default.asp?";
    	$sConnection = $sConnection."DataBaseAction=".$dataBaseAction;
    	$sConnection = $sConnection."&ID=".$id;
    	$sConnection = $sConnection."&SubSector=".$subSector;
    	$sConnection = $sConnection."&UserName=".$userName;
    	$sConnection = $sConnection."&AWBPrefix=".$AWBPrefix;
    	$sConnection = $sConnection."&AWBNumber=".$AWBNumber;
    	$sConnection = $sConnection."&ULD=".$ULD;
    	$sConnection = $sConnection."&Station=".$station;
    	$sConnection = $sConnection."&FlightPrefix=".$flightPrefix;
    	$sConnection = $sConnection."&FlightNumber=".$flightNumber;
    	$sConnection = $sConnection."&FlightNumberSuffix=".$flightNumberSuffix;
    	$sConnection = $sConnection."&Action=".$action;
    	$sConnection = $sConnection."&Comment=".$comment;
    	$sConnection = $sConnection."&FlightDate=".urlencode($flightDate);
    	$sConnection = $sConnection."&Start=".urlencode($start);
    	$result = file_get_html(mb_convert_encoding($sConnection,'utf8'));
    	
    	//echo $result;
    	
    	//broken
    	//http://172.30.194.123:8080/Jointweb/WebQueries/wqWebTraksInstructMaint/default.asp?DataBaseAction=D&ID=32039&SubSector=CDG-AF-01&UserName=m322945&AWBPrefix=   &AWBNumber=        &ULD= &Station=ABJ&FlightPrefix= &FlightNumber= &FlightNumberSuffix= &Action=Various&Comment=TEST&FlightDate=19000101 000000&Start=20150909 145317
    	//working
    	//http://172.30.194.123:8080/Jointweb/WebQueries/wqWebTraksInstructMaint/default.asp?DataBaseAction=D&ID=32039&Start=20150908%20105833&SubSector=CDG-AF-01&UserName=spl01001&AWBPrefix=&AWBNumber=&ULD=&Station=ABJ&FlightPrefix=&FlightNumber=&FlightNumberSu
    	return $result;
    }
    
    public function getInstBySubsectInstruction($subsect){
    	$sorted_array=array();
    	$inst_array = $this->getInstBySubsect($subsect);
    	foreach($inst_array as $inst){
    		$action = $inst["action"];
    		if($action == 'To be protected' || $action == 'CCC Action' || $action == 'IM' || $action == 'CFM'){
    			$sorted_array[]=$inst;
    		}
    	}
    	return $sorted_array;
    }
    
    public function getInstBySubsectGeneral($subsect){
    	$sorted_array=array();
    	$inst_array = $this->getInstBySubsect($subsect);
    	foreach($inst_array as $inst){
    		$action = $inst["action"];
    		if($action != 'To be protected' && $action != 'CCC Action' && $action != 'IM' && $action != 'CFM'){
    			$sorted_array[]=$inst;
    		}
    	}
    	return $sorted_array;
    }
}
