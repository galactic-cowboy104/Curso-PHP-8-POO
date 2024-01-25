<?php

    class Spartan {

        public string $clase = "Spartan";

        public function __construct(public $nombre, public $genero, public $rango, public $num_serv) {

        }

        public function Saludar() {
            return "¡Hola! Soy ".$this->nombre."-".$this->num_serv.".";
        }

        public function MostrarClase() {
            return "Pertenezco a la clase ".$this->clase.".";
        }

        public function MostrarRango() {
            return "Mi rango es ".$this->rango.".";
        }

    }

?>
