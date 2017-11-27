<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defausse
 *
 * @ORM\Table(name="defausse")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\DefausseRepository")
 */
class Defausse
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
     * @return Defausse
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
    public function getListeCarte()
    {
        return $this->listeCarte;
    }
}

