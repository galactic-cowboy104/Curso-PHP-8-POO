<?php

    class Spartan {

        public $nombre;
        public $genero;
        public $rango;
        public $num_serv;

        public function __construct($nombre, $genero, $rango, $num_serv) {
            $this->nombre = $nombre;
            $this->genero = $genero;
            $this->rango = $rango;
            $this->num_serv = $num_serv;
        }

        public function Saludar() {
            return "¡Hola! Soy ".$this->nombre."-".$this->num_serv.".";
        }

        public function MostrarRango() {
            return "Mi rango es ".$this->rango.".";
        }

    }

?>