<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblaction
 *
 * @ORM\Table(name="TblAction")
 * @ORM\Entity
 */
class Tblaction
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
     * @ORM\Column(name="ActionLabel", type="string", length=50, nullable=false)
     */
    private $actionlabel;


}
