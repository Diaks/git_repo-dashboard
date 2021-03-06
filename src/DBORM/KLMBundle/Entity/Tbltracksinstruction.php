<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @return Tbltracksinstruction
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
     * @return Tbltracksinstruction
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
     * @param \DBORM\KLMBundle\Entity\Tblsubsector $fkSubsector
     * @return Tbltracksinstruction
     */
    public function setFkSubsector(\DBORM\KLMBundle\Entity\Tblsubsector $fkSubsector = null)
    {
        $this->fkSubsector = $fkSubsector;

        return $this;
    }

    /**
     * Get fkSubsector
     *
     * @return \DBORM\KLMBundle\Entity\Tblsubsector 
     */
    public function getFkSubsector()
    {
        return $this->fkSubsector;
    }
}
