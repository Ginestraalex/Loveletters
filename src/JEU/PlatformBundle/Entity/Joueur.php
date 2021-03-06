<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\JoueurRepository")
 */
class Joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * 
     * @Assert\NotBlank()
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * 
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    
    /**
     * @var boolean
     *
     * @ORM\Column(name="connecte", type="boolean",nullable=true ,options={"default":false})
     * 
     *
     */
    private $connecte;
    
    /**
     * @var array
     *
     * @ORM\Column(name="cartes", type="array", nullable=true)
     * 
     */
    private $cartes;
    
    public function __construct(){
        
    }
    
    /**
     * Set id
     *
     * @param string
     * 
     * @return int
     */
    public function setId($ide)
    {
        $this->id = $ide;

        return $this;
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
     * Set bollean
     *
     * @param boolean 
     * 
     * @return boolean
     */
    public function setConnecte($is)
    {
        $this->connecte = $is;

    }

    /**
     * Get connecte
     *
     * @return boolean
     */
    public function getConnecte()
    {
        return $this->connecte;
    }



    /**
     * Set password
     *
     * @param string $password
     *
     * @return Joueur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Joueur
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * Set cartes
     *
     * @param Carte
     * 
     * @return array
     */
    public function setCartes($carte)
    {
        $this->cartes = $carte;

        return $this;
    }

    /**
     * Get cartes
     *
     * @return array
     */
    public function getCartes()
    {
        return $this->cartes;
    }
}

