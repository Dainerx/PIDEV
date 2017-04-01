<?php

namespace Pidev\GestionTrajetsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
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
     * @ORM\Column(name="marque", type="string", length=30, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=30, nullable=false)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=30, nullable=false)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="gamme", type="string", length=30, nullable=false)
     */
    private $gamme;

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
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return string
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * @param string $gamme
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;
    }


}

