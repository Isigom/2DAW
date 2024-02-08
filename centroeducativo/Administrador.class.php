<?php
    class Administrador {
        private $nombre;
        private $numeroEmpleadoCentro;

        public function __construct($nombre, $numeroEmpleadoCentro) {
        $this->nombre = $nombre;
            $this->numeroEmpleadoCentro = $numeroEmpleadoCentro;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            return $this->nombre = $nombre;
        }

        public function getNumeroEmpleadoCentro() {
            return $this->numeroEmpleadoCentro;
        }

        public function setNumeroEmpleadoCentro($numeroEmpleadoCentro) {
            return $this->numeroEmpleadoCentro = $numeroEmpleadoCentro;
        }


    }
?>