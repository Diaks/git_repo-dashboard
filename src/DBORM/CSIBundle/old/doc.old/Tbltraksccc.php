<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltraksccc
 *
 * @ORM\Table(name="TblTraksCCC", indexes={@ORM\Index(name="IDX_74A32F2D62C6738A", columns={"FK_action_id"}), @ORM\Index(name="IDX_74A32F2D94038302", columns={"FK_status_id"}), @ORM\Index(name="IDX_74A32F2D9AED6FCA", columns={"FK_user_id"}), @ORM\Index(name="IDX_74A32F2DC5DF7645", columns={"FK_resultat_id"}), @ORM\Index(name="IDX_74A32F2D63BE2921", columns={"FK_hub"})})
 * @ORM\Entity
 */
class Tbltraksccc
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
     * @ORM\Column(name="FK_subsector_code", type="string", length=50, nullable=false)
     */
    private $fkSubsectorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="FlightDate", type="string", length=50, nullable=true)
     */
    private $flightdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TraksComment", type="string", length=250, nullable=true)
     */
    private $trakscomment;

    /**
     * @var string
     *
     * @ORM\Column(name="CCCComment", type="string", length=250, nullable=true)
     */
    private $ccccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="RFOComment", type="string", length=250, nullable=true)
     */
    private $rfocomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Priorite", type="smallint", nullable=true)
     */
    private $priorite;

    /**
     * @var string
     *
     * @ORM\Column(name="ULD", type="string", length=50, nullable=true)
     */
    private $uld;

    /**
     * @var string
     *
     * @ORM\Column(name="AWB", type="string", length=50, nullable=true)
     */
    private $awb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHistorique", type="datetime", nullable=false)
     */
    private $datehistorique;

    /**
     * @var \Tblaction
     *
     * @ORM\ManyToOne(targetEntity="Tblaction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_action_id", referencedColumnName="PK_id")
     * })
     */
    private $fkAction;

    /**
     * @var \Tblstatus
     *
     * @ORM\ManyToOne(targetEntity="Tblstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_status_id", referencedColumnName="PK_id")
     * })
     */
    private $fkStatus;

    /**
     * @var \Tbluser
     *
     * @ORM\ManyToOne(targetEntity="Tbluser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_user_id", referencedColumnName="PK_id")
     * })
     */
    private $fkUser;

    /**
     * @var \Tbltraksresultat
     *
     * @ORM\ManyToOne(targetEntity="Tbltraksresultat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_resultat_id", referencedColumnName="PK_id")
     * })
     */
    private $fkResultat;

    /**
     * @var \Tblairport
     *
     * @ORM\ManyToOne(targetEntity="Tblairport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_hub", referencedColumnName="PK_Airport_code")
     * })
     */
    private $fkHub;


}
