<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblprioShc
 *
 * @ORM\Table(name="TblPrio_SHC")
 * @ORM\Entity
 */
class TblprioShc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SHC", type="string", length=3, nullable=false)
     */
    private $shc;

    /**
     * @var float
     *
     * @ORM\Column(name="Priority", type="float", precision=53, scale=0, nullable=false)
     */
    private $priority;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shc
     *
     * @param string $shc
     * @return TblprioShc
     */
    public function setShc($shc)
    {
        $this->shc = $shc;

        return $this;
    }

    /**
     * Get shc
     *
     * @return string 
     */
    public function getShc()
    {
        return $this->shc;
    }

    /**
     * Set priority
     *
     * @param float $priority
     * @return TblprioShc
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return float 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
