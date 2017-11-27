<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JEU\PlatformBundle\Entity;

/**
 * Description of Carte
 *
 * @author Mahr
 */
class Carte {
    private $valeur;
    private $url;
    private $effet;
    
    public function get_valeur(){
        return $this->$valeur;
    }
    
    public function get_url(){
        return $this->$url;
    }
    
    public function get_effet(){
        return $this->$effet;
    }
}
