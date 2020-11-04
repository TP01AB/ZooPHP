<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perro
 *
 * @author isra9
 */
include_once 'Animal.php';

class Perro extends Animal {

    public function __construct($nombre, $raza, $peso, $color) {
        parent::__construct($nombre, $raza, $peso, $color);
    }

    public function hacerRuido() {
        return 'GUAU' . '<br>';
    }

    public function hacerCaso() {
        $prob = random_int(1, 100);
        if ($prob < 90) {
            return'Hola Hola Hola Hola Hola' . '<br>';
        } else {
            return 'PASO DE TI,GUAU.' . '<br>';
        }
    }

    public function sacarPaseo() {
        return $this->nombre . ' se va de paseo.' . '<br>';
    }

    public function comer() {
        return $this->nombre . ' se pone a comer.' . '<br>';
    }

    public function dormir() {
        return $this->nombre . ' se duerme.' . '<br>';
    }

}
