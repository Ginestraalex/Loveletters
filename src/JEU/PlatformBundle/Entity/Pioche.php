<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pioche
 *
 * @ORM\Table(name="pioche")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\PiocheRepository")
 */
class Pioche
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
     * @var array
     *
     * @ORM\Column(name="listeCarte", type="array", nullable=true)
     */
    private $listeCarte;

    public function __construct(){
        $listeCarte = array(new Carte(8));
        array_push($listeCarte,new Carte(7));
        array_push($listeCarte,new Carte(6));
        array_push($listeCarte,new Carte(5));
        array_push($listeCarte,new Carte(5));
        array_push($listeCarte,new Carte(4));
        array_push($listeCarte,new Carte(4));
        array_push($listeCarte,new Carte(3));
        array_push($listeCarte,new Carte(3));
        array_push($listeCarte,new Carte(2));
        array_push($listeCarte,new Carte(2));
        array_push($listeCarte,new Carte(1));
        array_push($listeCarte,new Carte(1));
        array_push($listeCarte,new Carte(1));
        array_push($listeCarte,new Carte(1));
        $id=16;
    }
    
    public function melanger(){
        for($i;$i<16;$i++){
            $r= rand(0,15);
            $tmp=$listeCarte[$i];
            $listeCarte[$i]=$listeCarte[$r];
            $listeCarte[$r]=$tmp;
        }
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
     * Set listeCarte
     *
     * @param array $listeCarte
     *
     * @return Pioche
     */
    public function setListeCarte($listeCarte)
    {
        $this->listeCarte = $listeCarte;

        return $this;
    }

    
    
    /**
     * Get listeCarte
     *
     * @return array
     */
    public function getCarteNum($num)
    {
        return $this->listeCarte[$num];
    }
    
    /**
     * Get listeCarte
     *
     * @return array
     */
    public function getListeCarte()
    {
        return $this->listeCarte;
    }
}

