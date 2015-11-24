<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblprioSktc
 *
 * @ORM\Table(name="TblPrio_SKTC")
 * @ORM\Entity
 */
class TblprioSktc
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
     * @ORM\Column(name="SKTC", type="string", length=3, nullable=false)
     */
    private $sktc;

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
     * Set sktc
     *
     * @param string $sktc
     * @return TblprioSktc
     */
    public function setSktc($sktc)
    {
        $this->sktc = $sktc;

        return $this;
    }

    /**
     * Get sktc
     *
     * @return string 
     */
    public function getSktc()
    {
        return $this->sktc;
    }

    /**
     * Set priority
     *
     * @param float $priority
     * @return TblprioSktc
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
