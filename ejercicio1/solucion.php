<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

include_once('Aparato.php');
include_once('Ordenador.php');


$aparato=new Ordenador();
$aparato->estado();
$aparato->marcaAparato("Asus");
$aparato->potencia(32);

echo ($aparato->luz());


    ?>
</body>
</html>

