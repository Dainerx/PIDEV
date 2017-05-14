<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreLocation
 *
 * @ORM\Table(name="offre_location", indexes={@ORM\Index(name="id_vehicule", columns={"id_vehicule"}), @ORM\Index(name="id_agence", columns={"id_agence"}), @ORM\Index(name="nom_vehicule", columns={"id_vehicule"})})
 * @ORM\Entity
 */
class OffreLocation
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
     * @var float
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=false)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="offre", type="string", length=30, nullable=false)
     */
    private $offre;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=30, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=30, nullable=false)
     */
    private $modele;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

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
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agence", referencedColumnName="id")
     * })
     */
    private $idAgence;


}

