<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblphoneefficiency
 *
 * @ORM\Table(name="TblPhoneEfficiency")
 * @ORM\Entity
 */
class Tblphoneefficiency
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
     * @ORM\Column(name="Date", type="string", length=50, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Efficency", type="string", length=50, nullable=true)
     */
    private $efficency;

    /**
     * @var string
     *
     * @ORM\Column(name="Nb_Calls", type="string", length=50, nullable=true)
     */
    private $nbCalls;



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
     * @param string $date
     * @return Tblphoneefficiency
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set efficency
     *
     * @param string $efficency
     * @return Tblphoneefficiency
     */
    public function setEfficency($efficency)
    {
        $this->efficency = $efficency;

        return $this;
    }

    /**
     * Get efficency
     *
     * @return string 
     */
    public function getEfficency()
    {
        return $this->efficency;
    }

    /**
     * Set nbCalls
     *
     * @param string $nbCalls
     * @return Tblphoneefficiency
     */
    public function setNbCalls($nbCalls)
    {
        $this->nbCalls = $nbCalls;

        return $this;
    }

    /**
     * Get nbCalls
     *
     * @return string 
     */
    public function getNbCalls()
    {
        return $this->nbCalls;
    }
}
