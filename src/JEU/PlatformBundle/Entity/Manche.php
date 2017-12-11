<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manche
 *
 * @ORM\Table(name="manche")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\MancheRepository")
 */
class Manche
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
     * @var int
     * 
     * @ORM\Column(name="pioche", type="integer")
     * 
     * @ORM\OneToOne(targetEntity="JEUPlatformBundle\Entity\Pioche",cascade={"persist"})
     */
    private $pioche;

    /**
     * @var string
     *
     * @ORM\Column(name="gagnant", type="string", length=255, nullable=true)
     */
    private $gagnant;

    /**
     * 
     *
     * @ORM\Column(name="listeJoueur", type="array", nullable=true)
     * 
     * 
     */
    private $listeJoueur;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="no", type="integer",nullable=true)
     * 
     * @ORM\ManyToOne(targetEntity="JEUPlatformBundle\Entity\Partie",cascade={"persist"})
     */
    private $no;
    

    
    public function __construct($nom){
           $this->pioche=$nom ;
           
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
     * Set pioche
     *
     * @param pioche $no
     *
     * @return Pioche
     */
    public function setPioche($no)
    {
        $this->no = $no;

        return $this;
    }

    /**
     * Get pioche
     *
     * @return pioche
     */
    public function getPioche()
    {
        return $this->pioche;
    }

    /**
     * Set gagnant
     *
     * @param string $gagnant
     *
     * @return Manche
     */
    public function setGagnant($gagnant)
    {
        $this->gagnant = $gagnant;

        return $this;
    }

    /**
     * Get gagnant
     *
     * @return string
     */
    public function getGagnant()
    {
        return $this->gagnant;
    }

    /**
     * Set listeJoueur
     *
     * @param JEU\PlatformBundle\Entity\Joueur $joueur
     *
     * 
     */
    public function setListeJoueur(JEU\PlatformBundle\Entity\Joueur $joueur)
    {
        $this->listeJoueur[] = $joueur;

    }

    /**
     * Get listeJoueur
     *
     * @return array
     */
    public function getListeJoueur()
    {
        return $this->listeJoueur;
    }
    
    /**
     * Set noPartie
     *
     * @param integer $no
     *
     * @return integer
     */
    public function setNoPartie($no)
    {
        $this->noPartie = $no;

        return $this;
    }

    /**
     * Get noPartie
     *
     * @return int
     */
    public function getNoPartie()
    {
        return $this->noPartie;
    }
    
}

