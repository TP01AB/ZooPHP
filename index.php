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
        session_start();

        $perro = new Perro('bubu', 'yorkshire', 2, 'gris abuelo');
        $gato = new Gato('mei', 'Rusa', 'DEMASIADO', 'Gris oscuro');

        echo $gato->comer();
        echo $gato->dormir();
        echo $gato->hacerRuido();
        echo $gato->hacerCaso();
        echo $gato->vacunar();
        echo $gato->toserBolaPelo();
        ?><br><?php
        echo $perro->comer();
        echo $perro->dormir();
        echo $perro->hacerRuido();
        echo $perro->hacerCaso();
        echo $perro->vacunar();
        echo $perro->sacarPaseo();
        ?>
    </body>
</html>
