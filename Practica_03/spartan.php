<?php

    class Spartan {

        protected $nombre;
        public $genero;
        public $rango;
        private $num_serv;
        public string $clase = "Spartan";

        public function __construct($nombre, $genero, $rango, $num_serv) {
            $this->nombre = $nombre;
            $this->genero = $genero;
            $this->rango = $rango;
            $this->num_serv = $num_serv;
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