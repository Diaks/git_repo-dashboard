<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldayofweek
 *
 * @ORM\Table(name="TblDayOfWeek")
 * @ORM\Entity
 */
class Tbldayofweek
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
     * @ORM\Column(name="Day_Lbl", type="string", length=50, nullable=true)
     */
    private $dayLbl;


}
