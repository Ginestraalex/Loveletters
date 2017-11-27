<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JEU\PlatformBundle\Entity;

/**
 * Description of Pioche
 *
 * @author Mahr
 */
class Pioche {

    private $valeur;

    /**
     * Set id
     *
    * @param string $valeur
     *
     * @return Advert
     */
    public function setId($val)
    {
        $this->valeur = $val;

        return $this;
    }
    
     /**
     * Set id
     *
     * @return int
     */
    public function getId()
    {
        return $this->valeur;
    }
}
