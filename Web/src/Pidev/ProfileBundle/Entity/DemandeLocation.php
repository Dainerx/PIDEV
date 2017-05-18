<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeLocation
 *
 * @ORM\Table(name="demande_location", indexes={@ORM\Index(name="fk_idmembre", columns={"id_membre"})})
 * @ORM\Entity
 */
class DemandeLocation
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
     * @ORM\Column(name="nom_membre", type="string", length=30, nullable=false)
     */
    private $nomMembre = 'Membre';

    /**
     * @var string
     *
     * @ORM\Column(name="nom_location", type="string", length=30, nullable=false)
     */
    private $nomLocation = 'Offre 25';

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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30, nullable=false)
     */
    private $etat = 'En attente';

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=false)
     */
    private $cout;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;


}

