<?php

$descuento=true;
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];

if ($descuento==true) {
    echo("<p>El precio es:</p>");
    echo("<p>".($unidades*$precio)-($unidades*$precio*0.15)."€ con descuento</p>");
} else {
    echo("<p>El precio es:</p>");
    echo("<p>".($unidades*$precio)."€ sin descuento</p>");
}

