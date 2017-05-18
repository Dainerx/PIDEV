<?php

namespace Pidev\GestionTrajetsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet", indexes={@ORM\Index(name="id_vehicule", columns={"id_vehicule"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity(repositoryClass="Pidev\GestionTrajetsBundle\Repository\TrajetRepository")
 */
class Trajet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=30, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=30, nullable=false)
     */
    private $depart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="date", nullable=false)
     */
    private $datedepart;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePub", type="date", nullable=false)
     */
    private $datepub;


    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=false)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPlaceDispo", type="integer", nullable=false)
     */
    private $nbrplacedispo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suivi", type="boolean", nullable=false)
     */
    private $suivi;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id")
     * })
     */
    private $idVehicule;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param string $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return \DateTime
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * @param \DateTime $datedepart
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;
    }

    /**
     * @return float
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * @param float $cout
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getNbrplacedispo()
    {
        return $this->nbrplacedispo;
    }

    /**
     * @param int $nbrplacedispo
     */
    public function setNbrplacedispo($nbrplacedispo)
    {
        $this->nbrplacedispo = $nbrplacedispo;
    }

    /**
     * @return bool
     */
    public function isSuivi()
    {
        return $this->suivi;
    }

    /**
     * @param bool $suivi
     */
    public function setSuivi($suivi)
    {
        $this->suivi = $suivi;
    }

    /**
     * @return \Vehicule
     */
    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    /**
     * @param \Vehicule $idVehicule
     */
    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;
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

    /**
     * @return \DateTime
     */
    public function getDatepub()
    {
        return $this->datepub;
    }

    /**
     * @param \DateTime $datepub
     */
    public function setDatepub($datepub)
    {
        $this->datepub = $datepub;
    }



}

