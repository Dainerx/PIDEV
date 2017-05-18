<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireProfile
 *
 * @ORM\Table(name="commentaire_profile", indexes={@ORM\Index(name="id_publication", columns={"id_publication"}), @ORM\Index(name="id_publication_2", columns={"id_publication"})})
 * @ORM\Entity(repositoryClass="Pidev\UserBundle\Repository\CommentaireProfileRepository")
 */
class CommentaireProfile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \PublicationProfil
     *
     * @ORM\ManyToOne(targetEntity="PublicationProfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id")
     * })
     */
    private $idPublication;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Pidev\UserBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;

    /**
     * @return int
     */
    public function getIdCom()
    {
        return $this->idCom;
    }

    /**
     * @param int $idCom
     */
    public function setIdCom($idCom)
    {
        $this->idCom = $idCom;
    }

    /**
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \PublicationProfil
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * @param \PublicationProfil $idPublication
     */
    public function setIdPublication($idPublication)
    {
        $this->idPublication = $idPublication;
    }

    /**
     * @return \Membre
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * @param \Membre $idMembre
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;
    }




}

