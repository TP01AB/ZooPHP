<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'Animal.php';
        include_once 'Perro.php';
        include_once 'Gato.php';
        include_once 'Elefante.php';
        include_once 'Recursos.php';
        $cont = 9;
        $tablero = [];
        $tablero = inicializar($tablero);
        do {
             echo '<h2>Segundo:'.$cont.'</h2><br>';
            if ($cont % 2 == 0) {
                hacerCosas($tablero);
            }
            if ($cont % 10 == 0) {
                $animal = crearAnimal();
                $tablero = colocarAnimal($animal, $tablero);
                mostrarTablero($tablero);
            }
            if ($cont % 15 == 0) {
                $tablero = moverse($tablero);
                mostrarTablero($tablero);
            }
            if ($cont % 20 == 0) {
                $tablero = abandonaParque($tablero);
                mostrarTablero($tablero);
            }
            ob_flush();
            flush();
            
           // sleep(1);
            $cont++;
           
        } while ($cont < 40);
        ?>
    </body>
</html>
