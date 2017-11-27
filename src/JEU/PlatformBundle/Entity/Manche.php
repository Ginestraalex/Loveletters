<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JEU\PlatformBundle\Entity;

/**
 * Description of Manche
 *
 * @author Mahr
 */
class Manche {
    private $valeur;
    private $no;
    private $winner;
		
    public function get_valeur(){
        return $this->$valeur; 
    }

    public function get_no(){ 
        return $this->$no; 
    }
    
    public function set_no($value){ 
        $this->$no = $value; 
    }

    public function get_winner(){ 
        return $this->$winner; 
    }

    public function set_winner($value){ 
        $this->$winner = $value;
    }
}
