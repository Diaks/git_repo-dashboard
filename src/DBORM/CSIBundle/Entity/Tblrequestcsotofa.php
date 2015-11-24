<?php

namespace DBORM\CSIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrequestcsotofa
 *
 * @ORM\Table(name="TblRequestCSOToFA", indexes={@ORM\Index(name="IDX_FF45C34991445388", columns={"fa_matricule"}), @ORM\Index(name="IDX_FF45C3497B95BD3F", columns={"cso_id"}), @ORM\Index(name="IDX_FF45C349E2EA28A0", columns={"cso_request_support_id"}), @ORM\Index(name="IDX_FF45C349215A3347", columns={"queues_reasons_id"}), @ORM\Index(name="IDX_FF45C3499F2C3FAB", columns={"zone_id"}), @ORM\Index(name="IDX_FF45C3497638844E", columns={"awb_prefix_id"})})
 * @ORM\Entity
 */
class Tblrequestcsotofa
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
     * @ORM\Column(name="comment", type="text", length=-1, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="other_queues_reasons_libelle", type="string", length=100, nullable=true)
     */
    private $otherQueuesReasonsLibelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Tbluser
     *
     * @ORM\ManyToOne(targetEntity="Tbluser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fa_matricule", referencedColumnName="PK_id")
     * })
     */
    private $faMatricule;

    /**
     * @var \Tblcso
     *
     * @ORM\ManyToOne(targetEntity="Tblcso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cso_id", referencedColumnName="PK_id")
     * })
     */
    private $cso;

    /**
     * @var \Tblcsorequestsupport
     *
     * @ORM\ManyToOne(targetEntity="Tblcsorequestsupport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cso_request_support_id", referencedColumnName="PK_id")
     * })
     */
    private $csoRequestSupport;

    /**
     * @var \Tblqueuesreasonscsorequest
     *
     * @ORM\ManyToOne(targetEntity="Tblqueuesreasonscsorequest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="queues_reasons_id", referencedColumnName="PK_id")
     * })
     */
    private $queuesReasons;

    /**
     * @var \Tblzone
     *
     * @ORM\ManyToOne(targetEntity="Tblzone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_id", referencedColumnName="PK_id")
     * })
     */
    private $zone;

    /**
     * @var \Tblawbprefix
     *
     * @ORM\ManyToOne(targetEntity="Tblawbprefix")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="awb_prefix_id", referencedColumnName="PK_id")
     * })
     */
    private $awbPrefix;


}
