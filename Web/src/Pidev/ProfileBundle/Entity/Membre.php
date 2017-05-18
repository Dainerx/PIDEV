<?php
namespace Pidev\UserBundle\Entity;
/**
 * Created by PhpStorm.
 * User: xagta1
 * Date: 12/03/2017
 * Time: 14:43
 */
use FOS\MessageBundle\Model\ParticipantInterface;
use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity

 * @ORM\Table(name="membre")

 */

class Membre extends BaseUser implements ParticipantInterface
{
    /**

     * @ORM\Id

     * @ORM\Column(type="integer")

     * @ORM\GeneratedValue(strategy="AUTO")

     */
    protected $id ;



    /**
     * @ORM\Column(type="string" , length=255)
     */
    protected $nom ;

    /**
     * @return mixed
     */


    /**
     * @ORM\Column(type="date")
     */
    private $DateInscri ;
    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance ;

    /**
     * @ORM\Column(type="bigint",nullable=true)
     */
    private $NumeroTel ;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Adresse ;

    /**
     * @ORM\Column(type="integer")
     */
    private $points_fidelite ;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDateInscri()
    {
        return $this->DateInscri;
    }

    /**
     * @param mixed $DateInscri
     */
    public function setDateInscri($DateInscri)
    {
        $this->DateInscri = $DateInscri;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * @param mixed $DateNaissance
     */
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;
    }

    /**
     * @return mixed
     */
    public function getNumeroTel()
    {
        return $this->NumeroTel;
    }

    /**
     * @param mixed $NumeroTel
     */
    public function setNumeroTel($NumeroTel)
    {
        $this->NumeroTel = $NumeroTel;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param mixed $Adresse
     */
    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;
    }

    /**
     * @return mixed
     */
    public function getPointsFidelite()
    {
        return $this->points_fidelite;
    }

    /**
     * @param mixed $points_fidelite
     */
    public function setPointsFidelite($points_fidelite)
    {
        $this->points_fidelite = $points_fidelite;
    }

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }



}