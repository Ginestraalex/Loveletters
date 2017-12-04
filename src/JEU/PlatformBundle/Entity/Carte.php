<?php

namespace JEU\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carte
 *
 * @ORM\Table(name="carte")
 * @ORM\Entity(repositoryClass="JEU\PlatformBundle\Repository\CarteRepository")
 */
class Carte
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
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="string", length=255)
     */
    private $effet;

    public function __construct($v)
    {
        $valeur = $v;
        switch ($valeur) {
            case "9":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/verso.png";
                break;
            case "8":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/princess.png";
                break;
            case "7":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/countess.png";
                break;
            case "6":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/king.png";
                break;
            case "5":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/prince.png";
                break;
            case "4":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/handmaid.png";
                break;
            case "3":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/baron.png";
                break;
            case "2":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/priest.png";
                break;
            case "1":
                $url = "/Applications/MAMP/htdocs/Symfony/src/image/guard.png";
                break;
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
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return Carte
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Carte
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set effet
     *
     * @param string $effet
     *
     * @return Carte
     */
    public function setEffet($effet)
    {
        $this->effet = $effet;

        return $this;
    }

    /**
     * Get effet
     *
     * @return string
     */
    public function getEffet()
    {
        return $this->effet;
    }
}

