<?php

echo("<p>Operador unario</p>");
$unidades=5;
echo($unidades++);//el resultado es 5
echo("<br/>");
echo($unidades);//aquí el resultado es 6 porque
//utiliza el valor de arriba donde las unidades se
//incrementa en uno
echo("<p>Operador binario</p>");
$n1=8;
$n2=3;
//suma
$suma=$n1+$n2;
echo($suma);
echo("<br/>");
//resta
$resta=$n1-$n2;
echo($resta);
echo("<p>Operador ternario</p>");
$unidades=12;
$precio=8.5;
$descuento=true;
$mensaje="<h5>gracias por su visita</h5>";
if ($descuento) {
    $total=$unidades*$precio*0.8;
}
else {
    $total=$unidades*$precio;
    }
echo("<p>El total de su compra es ".$total."</p>");
echo($mensaje);

