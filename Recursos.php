<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Animal.php';
include_once 'Perro.php';
include_once 'Gato.php';
include_once 'Elefante.php';

function crearAnimal() {
    $prob = random_int(1, 3);
    switch ($prob) {
        case 1:
            $perro = new Perro('bubu', 'yorkshire', 2, 'gris abuelo');
            return $perro;
            break;
        case 2:
            $gato = new Gato('mei', 'Rusa', 'DEMASIADO', 'Gris oscuro');
            return $gato;
            break;
        case 3:
            $elefante = new Elefante('tambor', 'rojo', 'tonelaje', 'rojizo y blanco');
            return $elefante;
            break;
    }
}

function mostrarTablero($tablero) {
    for ($i = 0; $i < count($tablero); $i++) {
        if ($tablero[$i] instanceof Animal) {
            $animal = $tablero[$i];
            echo $i . '-' . $animal->getNombre();
        } else {
            echo $i . '- VACIO - ';
        }
    }
    echo '<br>';
}

function inicializar($tablero) {
    for ($i = 0; $i < 5; $i++) {
        $tablero[$i] = -1;
    }
    return $tablero;
}

function colocarAnimal($animal, $tablero) {
    $colocado = false;
    for ($i = 0; $i < count($tablero); $i++) {
        if (!($tablero[$i] instanceof Animal) && !$colocado) {
            $tablero[$i] = $animal;
            $colocado = true;
        }
    } if (!$colocado) {
        echo $animal->getNombre() . ' no encuentra sitio y se va del parque.' . '<br>';
    }
    return $tablero;
}

function hacerCosas($tablero) {
    foreach ($tablero as $value) {
        if ($value instanceof Animal) {
            $prob = random_int(1, 5);
            switch ($prob) {
                case 1:
                    echo $value->comer() . '<br>';
                    break;
                case 2:
                    echo $value->dormir() . '<br>';
                    break;
                case 3:
                    echo $value->hacerRuido() . '<br>';
                    break;
                case 4:
                    echo $value->hacerCaso() . '<br>';
                    break;
                case 5:
                    if ($value instanceof Gato) {
                        echo $value->toserBolaPelo() . '<br>';
                    }
                    if ($value instanceof Perro) {
                        echo $value->sacarPaseo() . '<br>';
                    }
                    if ($value instanceof Elefante) {
                        echo $value->abrazarViajero() . '<br>';
                    }
                    if (!($value instanceof Animal)) {
                        echo 'AQUI NO PASA NADA' . '<br>';
                    }
                    break;
            }
        }
    }
}

function moverse($tablero) {
    $nuevoVector = [];
    for ($i = 0; $i < count($tablero); $i++) {

        if ($tablero[$i] instanceof Animal) {
            $colocado = false;
            if ($i + 1 < count($tablero) - 1 && !($tablero[$i + 1] instanceof Animal) && !$colocado) {
                $colocado = true;
                $nuevoVector[] = -1;
                $nuevoVector[] = $tablero[$i];
            }
            if ($i - 1 > -1 && !($tablero[$i - 1] instanceof Animal)) {
                $colocado = true;
                $nuevoVector[] = $tablero[$i];
                $nuevoVector[] = -1;
            }
        } else {
            $nuevoVector[] = $tablero[$i];
        }
    }
    return $nuevoVector;
}

function abandonaParque($tablero) {
    $prob = random_int(1, 100);
    $borrado = false;
    if ($prob < 50) {
        do {
            $i = random_int(0, 4);
            if ($tablero[$i] instanceof Animal) {
                echo $tablero[$i]->getNombre() . ' se va del parque.' . '<br>';
                $tablero[$i] = -1;
                $borrado = true;
            }
        } while (!$borrado);
    }
    return $tablero;
}
