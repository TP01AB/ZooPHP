<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Elefante
 *
 * @author isra9
 */
include_once 'Animal.php';

class Elefante extends Animal {

    public function __construct($nombre, $raza, $peso, $color) {
        parent::__construct($nombre, $raza, $peso, $color);
    }

    public function comer() {
        return $this->nombre . ' ha comido pero quiere mas comida.' . '<br>';
    }

    public function dormir() {
        return $this->nombre . ' ha dormido.ELEF' . '<br>';
    }

    public function hacerRuido() {
        return $this->nombre . 'Vamos con el un , dos , tres , cuatro.' . '<br>';
    }

    public function abrazarViajero() {
        return $this->nombre . 'Te abraza' . '<br>';
    }

}
