<?php
include_once('Aparato.php');
class Ordenador extends Aparato{
    public $luces="blancas";
    
    public function luz(){
        return $this->luces;
    }

    public function estado(){
        if($this->fuente){
            echo "<p>El ordenador esta encendido</p>";
        }
        else{
            echo "<p>El ordenador esta apagado</p>";
        }

    }
    
}


