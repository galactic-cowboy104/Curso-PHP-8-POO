<?php

    require_once "spartan.php"; 

    class ODST extends Spartan{

        public static string $clase = "ODST";

        public function Saludar() {
            return "¡Hola! Soy ".$this->getNombre().", mi número de servicio es: ".$this->getNumServ().".";
        }

        public function MostrarApodo() {
            $this->setNombre("Eddie");
            return "Mis amigos me suelen decir: ".$this->getNombre().".";
        }

        public static function MostrarClase() {
            return "Pertenezco a la clase ".self::$clase.".";
        }

        public static function Ascender() {

            if(parent::getRango() == "Sargento de Artillería") {
                return "Puedo ser ascendido a ".parent::$clase.".";
            } else {
                return "No puedo ser ascendido a ".parent::$clase.".";
            }

        }

    }

?>