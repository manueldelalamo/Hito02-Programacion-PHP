<?php

interface Television{
    public function tamaño($pulgadas);
    public function funcionar();
}

class TV implements Television{
    public function tamaño($pulgadas){
        if ($pulgadas>40) {
            echo("<p>Tu televisión es grande</p>");
        } else {
            echo("<p>Tu televisión no es grande</p>");
        }
    }

    public function funcionar(){
        echo("<p>Tu television funciona</p>");
    }
}


