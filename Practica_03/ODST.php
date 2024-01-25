<?php

    require_once "spartan.php"; 

    class ODST extends Spartan{

        public string $clase = "ODST";

        public function Saludar() {
            return "¡Hola! Soy ".$this->nombre.", mi número de servicio es: ".$this->num_serv.".";
        }

        protected function Ascender() {

            if($this->rango == "Sargento de Artillería") {
                return "Puedo ser ascendido a Spartan.";
            } else {
                return "No puedo ser ascendido a Spartan.";
            }

        }

    }

?>