<?php

namespace DBORM\KLMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsubsector
 *
 * @ORM\Table(name="TblSubSector", indexes={@ORM\Index(name="IDX_C940AEED21614BD8", columns={"FK_sector_id"})})
 * @ORM\Entity
 */
class Tblsubsector
{
    /**
     * @var string
     *
     * @ORM\Column(name="PK_SubSector_code", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkSubsectorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var \Tblsector
     *
     * @ORM\ManyToOne(targetEntity="Tblsector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_sector_id", referencedColumnName="PK_id")
     * })
     */
    private $fkSector;



    /**
     * Get pkSubsectorCode
     *
     * @return string 
     */
    public function getPkSubsectorCode()
    {
        return $this->pkSubsectorCode;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Tblsubsector
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fkSector
     *
     * @param \DBORM\KLMBundle\Entity\Tblsector $fkSector
     * @return Tblsubsector
     */
    public function setFkSector(\DBORM\KLMBundle\Entity\Tblsector $fkSector = null)
    {
        $this->fkSector = $fkSector;

        return $this;
    }

    /**
     * Get fkSector
     *
     * @return \DBORM\KLMBundle\Entity\Tblsector 
     */
    public function getFkSector()
    {
        return $this->fkSector;
    }
}
