<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gato
 *
 * @author isra9
 */
include_once 'Animal.php';

class Gato extends Animal {

    public function __construct($nombre, $raza, $peso, $color) {
        parent::__construct($nombre, $raza, $peso, $color);
    }

    public function hacerRuido() {
        return 'MIAU' . '<br>';
    }

    public function hacerCaso() {
        $prob = random_int(1, 100);
        if ($prob < 6) {
            return'Hola , dame de comer.';
        } else {
            return 'bfffff' . '<br>';
        }
    }

    public function toserBolaPelo() {
        return $this->nombre . ' escupe una cria de gremlin' . '<br>';
    }

    public function comer() {
        return $this->nombre . ' ha comido pero quiere mas comida.' . '<br>';
    }

    public function dormir() {
        return $this->nombre . ' sigue durmiendo.' . '<br>';
    }

}
