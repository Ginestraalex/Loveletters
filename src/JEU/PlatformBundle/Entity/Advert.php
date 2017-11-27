<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\AdvertRepository")
 */
class Advert
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
     * @ORM\Column(name="password", type="string", length=8)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;


    /**
     * Set id
     *
    * @param string $password
     *
     * @return Advert
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
     /**
     * Set id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set password
     *
     * @param string $password
     *
     * @return Advert
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
     * @return Advert
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
}

