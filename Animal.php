<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author isra9
 */
class Animal {

    protected $nombre;
    protected $raza;
    protected $peso;
    protected $color;

    public function __construct($nombre, $raza, $peso, $color) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->peso = $peso;
        $this->color = $color;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getColor() {
        return $this->color;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setRaza($raza): void {
        $this->raza = $raza;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setColor($color): void {
        $this->color = $color;
    }

    public function vacunar() {
        return $this->nombre . ' ha sido vacunado.' . '<br>';
    }

    public function comer() {
        return $this->nombre . ' ha comido.' . '<br>';
    }

    public function dormir() {
        return $this->nombre . ' se duerme.' . '<br>';
    }

    public function hacerRuido() {
        
    }

    public function hacerCaso() {
        
    }

}
