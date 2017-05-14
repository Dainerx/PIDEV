<?php
/**
 * Created by PhpStorm.
 * User: xagta1
 * Date: 08/04/2017
 * Time: 17:42
 */

namespace Pidev\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *Follwing
 *
 *@ORM\Table(name="Following", indexes={@ORM\Index(name="Follower", columns={"Follower"}), @ORM\Index(name="Followed", columns={"Followed"})})
 *@ORM\Entity
 **/

class Following
{
/**
 * @var integer
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="IDENTITY")
 *
 **/

private $id ;



    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Pidev\UserBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Follower", referencedColumnName="id")
     * })
     */
private $Follower ;


    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Pidev\UserBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Followed", referencedColumnName="id")
     * })
     */
private $Followed ;

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
     * @return Membre
     */
    public function getFollower()
    {
        return $this->Follower;
    }

    /**
     * @param Membre $Follower
     */
    public function setFollower($Follower)
    {
        $this->Follower = $Follower;
    }

    /**
     * @return Membre
     */
    public function getFollowed()
    {
        return $this->Followed;
    }

    /**
     * @param Membre $Followed
     */
    public function setFollowed($Followed)
    {
        $this->Followed = $Followed;
    }





}