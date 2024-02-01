<?php

    class Spartan {

        private $nombre;
        protected $genero;
        public static $rango;
        private $num_serv;
        public static string $clase = "Spartan";

        public function __construct($nombre, $genero, $rango, $num_serv) {
            $this->nombre = $nombre;
            $this->genero = $genero;
            self::$rango = $rango;
            $this->num_serv = $num_serv;
        }

        public function Saludar() {
            return "¡Hola! Soy ".$this->nombre."-".$this->num_serv.".";
        }

        public static function MostrarClase() {
            return "Pertenezco a la clase ".self::$clase.".";
        }

        public static function MostrarRango() {
            return "Mi rango es ".self::$rango.".";
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getNumServ() {
            return $this->num_serv;
        }

        public static function getRango() {
            return self::$rango;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

    }

?>
