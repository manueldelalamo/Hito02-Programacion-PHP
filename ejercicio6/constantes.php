<?php

echo("<h3>Ejemplo 1</h3>");

define ("PI", 3.1415926);
define ("BR", "<br/>");
define ("LIBRO", "PHP 6");
print(PI);
print(BR);
print(LIBRO);

echo("<h3>Ejemplo 2</h3>");

define("TEXTO","En un lugar de la mancha");
echo(TEXTO); //no usar $ en una constante definida
echo("<br/>");
define("MENSAJE","de cuyo nombre no quiero acordarme");
echo(MENSAJE); //no usar $ en una constante definida
echo("<br/>");
const ASIGNATURAS = array("programación","lenguaje de marcas","base de datos");
echo(ASIGNATURAS[0]);
echo("<br/>");
echo(__FILE__); //constantes predefinidas
echo("<br/>");
echo(__DIR__);

