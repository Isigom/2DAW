<?php

    class Alumno extends Centro{

        private $numMatricula;
        private $apellido1;
        private $apellido2;
        private $listaPadres;

        public function __construct($numMatricula, $apellido1, $apellido2, $listaPadres) {
            $this->numMatricula = $numMatricula;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->listaPadres = $listaPadres;
        }

        public function getNumMatricula(){
            return $this->numMatricula;
        }

        public function setNumMatricula($numMatricula){
            $this->numMatricula = $numMatricula;
        }

        public function getApellido1(){
            return $this->apellido1;
        }

        public function setApellido2($apellido2){
            $this->apellido2 = $apellido2;
        }
        
        public function getListaPadres(){
            return $this->listaPadres;
        }
        
        public function setListaPadres($listaPadres){
            $this->listaPadres = $listaPadres;
        }

    }

?>