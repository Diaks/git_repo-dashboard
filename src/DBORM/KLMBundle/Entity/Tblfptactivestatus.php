<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptactivestatus
 *
 * @ORM\Table(name="TblFPTActiveStatus", indexes={@ORM\Index(name="IDX_D453B727B41EA3FFD3F072244D225600", columns={"FK_FlightNumber", "FK_FlightDate", "FK_Version"}), @ORM\Index(name="IDX_D453B72716F201A1", columns={"FK_Status_id"})})
 * @ORM\Entity
 */
class Tblfptactivestatus
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
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=-1, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlreadyTried", type="integer", nullable=true)
     */
    private $alreadytried;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTimeEvt", type="datetime", nullable=true)
     */
    private $starttimeevt;

    /**
     * @var \Tblfptflights
     *
     * @ORM\ManyToOne(targetEntity="Tblfptflights")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_FlightNumber", referencedColumnName="PK_FlightNumber"),
     *   @ORM\JoinColumn(name="FK_FlightDate", referencedColumnName="PK_FlightDate"),
     *   @ORM\JoinColumn(name="FK_Version", referencedColumnName="PK_Version")
     * })
     */
    private $fkFlightnumber;

    /**
     * @var \Tblfptstatus
     *
     * @ORM\ManyToOne(targetEntity="Tblfptstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Status_id", referencedColumnName="PK_id")
     * })
     */
    private $fkStatus;



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
     * Set comment
     *
     * @param string $comment
     * @return Tblfptactivestatus
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
     * Set alreadytried
     *
     * @param integer $alreadytried
     * @return Tblfptactivestatus
     */
    public function setAlreadytried($alreadytried)
    {
        $this->alreadytried = $alreadytried;

        return $this;
    }

    /**
     * Get alreadytried
     *
     * @return integer 
     */
    public function getAlreadytried()
    {
        return $this->alreadytried;
    }

    /**
     * Set starttimeevt
     *
     * @param \DateTime $starttimeevt
     * @return Tblfptactivestatus
     */
    public function setStarttimeevt($starttimeevt)
    {
        $this->starttimeevt = $starttimeevt;

        return $this;
    }

    /**
     * Get starttimeevt
     *
     * @return \DateTime 
     */
    public function getStarttimeevt()
    {
        return $this->starttimeevt;
    }

    /**
     * Set fkFlightnumber
     *
     * @param \DBORM\KLMBundle\Entity\Tblfptflights $fkFlightnumber
     * @return Tblfptactivestatus
     */
    public function setFkFlightnumber(\DBORM\KLMBundle\Entity\Tblfptflights $fkFlightnumber = null)
    {
        $this->fkFlightnumber = $fkFlightnumber;

        return $this;
    }

    /**
     * Get fkFlightnumber
     *
     * @return \DBORM\KLMBundle\Entity\Tblfptflights 
     */
    public function getFkFlightnumber()
    {
        return $this->fkFlightnumber;
    }

    /**
     * Set fkStatus
     *
     * @param \DBORM\KLMBundle\Entity\Tblfptstatus $fkStatus
     * @return Tblfptactivestatus
     */
    public function setFkStatus(\DBORM\KLMBundle\Entity\Tblfptstatus $fkStatus = null)
    {
        $this->fkStatus = $fkStatus;

        return $this;
    }

    /**
     * Get fkStatus
     *
     * @return \DBORM\KLMBundle\Entity\Tblfptstatus 
     */
    public function getFkStatus()
    {
        return $this->fkStatus;
    }
}
