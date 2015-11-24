<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblawbprefix
 *
 * @ORM\Table(name="TblAWBPrefix")
 * @ORM\Entity
 */
class Tblawbprefix
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
     * @var integer
     *
     * @ORM\Column(name="awb_prefix", type="integer", nullable=false)
     */
    private $awbPrefix;


}
