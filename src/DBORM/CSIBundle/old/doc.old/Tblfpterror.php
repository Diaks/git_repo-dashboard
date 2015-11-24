<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfpterror
 *
 * @ORM\Table(name="TblFPTError")
 * @ORM\Entity
 */
class Tblfpterror
{
	/**
	 * @var string
	 *
	 * @ORM\Column(name="PK_id", type="string", length=50, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $pkId;
	
    /**
     * @var string
     *
     * @ORM\Column(name="FK_FlightNumber", type="string", length=50, nullable=true)
     */
    private $fkFlightnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="FK_FlightDate", type="string", length=50, nullable=true)
     */
    private $fkFlightdate;

    /**
     * @var string
     *
     * @ORM\Column(name="FK_Version", type="text", length=-1, nullable=true)
     */
    private $fkVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="FK_User_id", type="string", length=10, nullable=true)
     */
    private $fkUserId;

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
     * Set fkFlightnumber
     *
     * @param string $fkFlightnumber
     * @return Tblfpterror
     */
    public function setFkFlightnumber($fkFlightnumber)
    {
        $this->fkFlightnumber = $fkFlightnumber;

        return $this;
    }

    /**
     * Get fkFlightnumber
     *
     * @return string 
     */
    public function getFkFlightnumber()
    {
        return $this->fkFlightnumber;
    }

    /**
     * Set fkFlightdate
     *
     * @param string $fkFlightdate
     * @return Tblfpterror
     */
    public function setFkFlightdate($fkFlightdate)
    {
        $this->fkFlightdate = $fkFlightdate;

        return $this;
    }

    /**
     * Get fkFlightdate
     *
     * @return string 
     */
    public function getFkFlightdate()
    {
        return $this->fkFlightdate;
    }

    /**
     * Set fkVersion
     *
     * @param string $fkVersion
     * @return Tblfpterror
     */
    public function setFkVersion($fkVersion)
    {
        $this->fkVersion = $fkVersion;

        return $this;
    }

    /**
     * Get fkVersion
     *
     * @return string 
     */
    public function getFkVersion()
    {
        return $this->fkVersion;
    }

    /**
     * Set fkUserId
     *
     * @param string $fkUserId
     * @return Tblfpterror
     */
    public function setFkUserId($fkUserId)
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }

    /**
     * Get fkUserId
     *
     * @return string 
     */
    public function getFkUserId()
    {
        return $this->fkUserId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Tblfpterror
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
     * @return Tblfpterror
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
     * Get pkId
     *
     * @return string 
     */
    public function getPkId()
    {
        return $this->pkId;
    }
}
