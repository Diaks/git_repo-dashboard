<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblstatus
 *
 * @ORM\Table(name="TblStatus")
 * @ORM\Entity
 */
class Tblstatus
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
     * @ORM\Column(name="LabelStatus", type="string", length=50, nullable=false)
     */
    private $labelstatus;


}
