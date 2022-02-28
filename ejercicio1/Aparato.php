<?php

 abstract class Aparato{

    public $fuente=true;
    public $marca;
    public $memoria;

    public function estado(){
        if($this->fuente){
            echo "<p>El aparato esta encendido</p>";
        }
        else{
            echo "<p>El aparato esta apagado</p>";
        }

    }

    public function marcaAparato($marca){
        if($marca=="Asus"){
            echo"<p>El aparato es un Asus</p>";
        }
        else{
            echo"<p>El aparato no es un Asus</p>";
        }
    }

    public function potencia($memoria){
        if ($memoria > 16){
            echo "<p>El aparato tiene mucha memoria</p>";
        }
        else{
            echo"<p>El aparato tiene poca memoria</p>";
        }

    }
}

