<?php

namespace Pidev\GestionTrajetsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passager
 *
 * @ORM\Table(name="passager", indexes={@ORM\Index(name="id_trajet", columns={"id_trajet", "id_membre"}), @ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_trajet_2", columns={"id_trajet"})})
 * @ORM\Entity(repositoryClass="Pidev\GestionTrajetsBundle\Repository\TrajetRepository")
 */
class Passager
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
     * @var \Trajet
     *
     * @ORM\ManyToOne(targetEntity="Trajet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trajet", referencedColumnName="id")
     * })
     */
    private $idTrajet;

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
     * @return \Trajet
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }

    /**
     * @param \Trajet $idTrajet
     */
    public function setIdTrajet($idTrajet)
    {
        $this->idTrajet = $idTrajet;
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

