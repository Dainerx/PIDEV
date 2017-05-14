<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationForum
 *
 * @ORM\Table(name="publication_forum", indexes={@ORM\Index(name="id_personne", columns={"id_personne"}), @ORM\Index(name="id_personne_2", columns={"id_personne"})})
 * @ORM\Entity
 */
class PublicationForum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="picpath", type="string", length=30, nullable=true)
     */
    private $picpath;

    /**
     * @var string
     *
     * @ORM\Column(name="videopath", type="string", length=30, nullable=true)
     */
    private $videopath;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     */
    private $idPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;


}

