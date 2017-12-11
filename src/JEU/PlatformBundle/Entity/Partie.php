<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Partie
 *
 * @ORM\Table(name="partie")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\PartieRepository")
 */
class Partie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPartie", type="string", length=255,nullable=true)
     */
    private $nomPartie;

    /**
     * @var array
     *
     * @ORM\Column(name="joueur", type="array",nullable=true)
     * 
     * @ORM\ManyToMany(targetEntity="JEUPlatformBundle\Entity\Joueur",cascade={"persist"})
     * @ORM\JoinTable(name="joueurPartie")
     */
    private $joueur;
    
    /**
     * 
     *
     * @ORM\Column(name="manche", nullable=true)
     * 
     * @ORM\OneToOne(targetEntity="JEUPlatformBundle\Entity\Manche",cascade={"persist"})
     */
    private $manche;

        public function __construct(){
           $this->joueur= new ArrayCollection(); 
        }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPartie
     *
     * @param string $nomPartie
     *
     * @return string
     */
    public function setNomPartie($nomPartie)
    {
        $this->nomPartie = $nomPartie;

        return $this;
    }

    /**
     * Get nomPartie
     *
     * @return string
     */
    public function getNomPartie()
    {
        return $this->nomPartie;
    }

    /**
     * Set joueur
     *
     * @param array $joueur
     *
     * @return array
     */
    public function setJoueur($joueur)
    {
        $this->joueur[] = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return array
     */
    public function getJoueur()
    {
        return $this->joueur;
    }
    
    
    
    /**
     * Set manche
     *
     * @param $manch
     *
     * @return manche
     */
    public function setManche($manch)
    {
        $this->manche = $manch;

        return $this;
    }

    /**
     * Get manche
     *
     * @return manche
     */
    public function getManche()
    {
        return $this->manche;
    }
}

