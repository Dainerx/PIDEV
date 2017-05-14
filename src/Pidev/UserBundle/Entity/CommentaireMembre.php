<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireMembre
 *
 * @ORM\Table(name="commentaire_membre")
 * @ORM\Entity
 */
class CommentaireMembre
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
     * @ORM\Column(name="texte", type="string", length=255, nullable=false)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre_vise", type="integer", nullable=false)
     */
    private $idMembreVise;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     */
    private $idMembre;


}

