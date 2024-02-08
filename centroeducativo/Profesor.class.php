<?php

    class Profesor extends Centro{
    
        private $numSS;
        private $titulAcadPrinc;
        private $telefono;
        private $email;
        private $arrayListAlumnos;

        public function __construct($numSS, $titulAcadPrinc, $telefono, $email,$arrayListAlumnos) {
            $this->numSS = $numSS;
            $this->titulAcadPrinc = $titulAcadPrinc;
            $this->telefono = $telefono;
            $this-> email = $email;
            $this->arrayListAlumnos = array();
        }

        public function getNumSS(){
            return $this->numSS;
        }

        public function setNumSS($numSS){
            $this->numSS = $numSS;
        }

        public function getTitulAcadPrinc(){
            return $this->titulAcadPrinc;
        }

        public function setTitulAcadPrinc($titulAcadPrinc){
            $this->titulAcadPrinc = $titulAcadPrinc;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function agregarAlumno($alumno){
            array_push($this->arrayListAlumnos, $alumno);
        }

        public function enviarMensaje(){
            echo "Mensaje enviado";
        }

        public function subirFotos(){
            echo "Fotos subidas";
        }

        public function adjuntarArchivos(){
            echo "Archivos adjuntados";
        }
        
        
        





    }
        


        

    

?>