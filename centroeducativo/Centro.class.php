<?php

    class Centro{

        private $nombre;
        private $direccion;
        private $dni;
        private $fechNac;

        public function __construct($nombre, $direccion, $dni, $fechNac){
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->dni = $dni;
            $this->fechNac = $fechNac;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        public function getdni(){
            return $this->dni;
        }

        public function setDni($dni){
            $this->dni = $dni;
        }

        public function getFechNac(){
            return $this->fechNac;
        }

        public function setFechNac($fechNac){
            $this->fechNac = $fechNac;
        }

    }


?>