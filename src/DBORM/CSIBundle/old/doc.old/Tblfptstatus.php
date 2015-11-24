<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfptstatus
 *
 * @ORM\Table(name="TblFPTStatus")
 * @ORM\Entity
 */
class Tblfptstatus
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
     * Get pkId
     *
     * @return string 
     */
    public function getPkId()
    {
        return $this->pkId;
    }
}
