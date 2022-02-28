<?php

$productos = [
    [
        'id' => 1,
        'nombre' => 'Manzanas',
        'precio' => 1.40,
        'impuesto' => 1.21,
    ],
    [
        'id' => 2,
        'nombre' => 'Peras',
        'precio' => 1.20,
        'impuesto' => 1.21,
    ],
    [
        'id' => 3,
        'nombre' => 'Naranjas',
        'precio' => 1.35,
        'impuesto' => 1.21,
    ],
];

$iva= 1.21;

$productosConIva = array_filter($productos, fn($producto) => $producto['impuesto'] == $iva);
//array_filter: filtra elementos de un array usando una función de devolución de llamada
$precios = array_map(fn($producto) => $producto['precio'] * $producto['impuesto'], $productosConIva);
//array_map: aplica la retrollamada a los elementos de los arrays dados
$total = array_sum($precios);
//array_sum: devuelve la suma de los valores de un array.
echo "Total: $total";

/*Diferencia respecto a las funciones anónimas 
$iva= 1.21;
$productosConIva= array_filter($productos, function($producto) use ($iva) { return $producto['impuesto'] == $iva; });
$precios = array_map(function($producto) { return $producto['precio'] * $producto['impuesto']; }, $productosConIva);
$total = array_sum($precios);

echo "Total: $total"; */

