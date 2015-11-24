<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblprioSegment
 *
 * @ORM\Table(name="TblPrio_Segment")
 * @ORM\Entity
 */
class TblprioSegment
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
     * @ORM\Column(name="Segment", type="string", length=3, nullable=false)
     */
    private $segment;

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
     * Set segment
     *
     * @param string $segment
     * @return TblprioSegment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string 
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set priority
     *
     * @param float $priority
     * @return TblprioSegment
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
