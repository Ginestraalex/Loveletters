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
     * @ORM\Column(name="no", type="integer", nullable=true)
     */
    private $no;

    /**
     * @var string
     *
     * @ORM\Column(name="gagnant", type="string", length=255)
     */
    private $gagnant;

    /**
     * @var array
     *
     * @ORM\Column(name="listeJoueur", type="array", nullable=true)
     */
    private $listeJoueur;


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
     * Set no
     *
     * @param integer $no
     *
     * @return Manche
     */
    public function setNo($no)
    {
        $this->no = $no;

        return $this;
    }

    /**
     * Get no
     *
     * @return int
     */
    public function getNo()
    {
        return $this->no;
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
     * @param array $listeJoueur
     *
     * @return Manche
     */
    public function setListeJoueur($listeJoueur)
    {
        $this->listeJoueur = $listeJoueur;

        return $this;
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
}

