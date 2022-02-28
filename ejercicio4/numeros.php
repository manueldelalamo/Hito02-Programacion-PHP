<?php

$numeros=$_POST['numero'];

for ($x=2; $x <=$numeros ; $x++) { 
    $primo=true;
    for ($p=2; $p <=$x-1 ; $p++) { 
        if ($x%$p==0) {
            $primo=false;
            break;
        }
    }
    if ($primo) {
        echo($x."<br/>");
    }
}

