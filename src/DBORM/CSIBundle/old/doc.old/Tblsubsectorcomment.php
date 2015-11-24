<?php

namespace DBORM\CSIBundle\Entity;

use \DOMDocument;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Connection;

use General\WidgetBundle\Controller\WidgetController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Tblsubsectorcomment
 *
 * @ORM\Table(name="TblSubSectorComment", indexes={@ORM\Index(name="IDX_491E257C2E862701", columns={"FK_subsector_id"})})
 * @ORM\Entity
 */
class Tblsubsectorcomment
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
     * @ORM\Column(name="Comment", type="string", length=0, nullable=true)
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

    private $conn, $WidgetController;
    
    public function __construct(Connection $conn)
    {
    	$this->conn = $conn;
    	$this->WidgetController = new WidgetController();
    }
    
    public function getLastComment($subSec)
    {
    	return $this->conn->fetchColumn(
    			"SELECT top 1 Comment
    				FROM Tblsubsectorcomment s
    				WHERE s.FK_subsector_id = ?
    				order by Date DESC",
    			array($subSec)
    	);
    }
    
    public function getAllCommentBySubsect($subSec)
    {
    	return $this->conn->fetchAll(
    			"SELECT s.Comment, s.Date, s.FK_User_id
    				FROM Tblsubsectorcomment s
    				WHERE s.FK_subsector_id = ?
    				order by Date DESC",
    			array($subSec)
    	);
    }
    
    /*public function deleteUser($id){
    
    	$this->conn->delete('Tbluser', array('PK_id' => $id));
    }*/
    
    public function addComment($subsSector,$user,$comment){
    	 
    	$this->conn->insert('Tblsubsectorcomment', array(
    				'FK_subsector_id' =>$subsSector,
    				'FK_User_id' =>$user,
    				'Comment' =>$comment,
    				'Date' => date('Y-m-d H:i:s')));
    				
    }
   
    /**
     * Get pkId
     *
     * @return integer 
     */
    public function getPkId()
    {
        return $this->pkId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Tblsubsectorcomment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Tblsubsectorcomment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set fkSubsector
     *
     * @param \DBORM\CSIBundle\Entity\Tblsubsector $fkSubsector
     * @return Tblsubsectorcomment
     */
    public function setFkSubsector(\DBORM\CSIBundle\Entity\Tblsubsector $fkSubsector = null)
    {
        $this->fkSubsector = $fkSubsector;

        return $this;
    }

    /**
     * Get fkSubsector
     *
     * @return \DBORM\CSIBundle\Entity\Tblsubsector 
     */
    public function getFkSubsector()
    {
        return $this->fkSubsector;
    }
}
