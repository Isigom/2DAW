<?php
    class Padre{

        private $nombre;
        private $apellido1;
        private $apellido2;
        private $telefono;
        private $email;
        private $listaAlumnos;
        private $arrayListMensajes;



        public function __construct($nombre, $apellido1, $apellido2, $telefono, $email, $listaAlumnos,$arrayListMensajes){
            $this->nombre = $nombre;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->listaAlumnos = $listaAlumnos;
            $this->arrayListMensajes = $arrayListMensajes;

        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            return $this->nombre = $nombre;
        }

        public function getApellido1(){
            return $this->apellido1;
        }

        public function setApellido1($apellido1){
            return $this->apellido1 = $apellido1;
        }

        public function getApellido2(){
            return $this->apellido2;
        }

        public function setApellido2($apellido2){
            return $this->apellido2 = $apellido2;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function setTelefono($telefono){
            return $this->telefono = $telefono;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            return $this->email = $email;
        }
        
        public function getListaAlumnos(){
            return $this->listaAlumnos;
        }
        
        public function setListaAlumnos($listaAlumnos){
            return $this->listaAlumnos = $listaAlumnos;
        }
        
        public function getArrayListMensajes(){
            return $this->arrayListMensajes;
        }
        
        public function setArrayListMensajes($arrayListMensajes){
            return $this->arrayListMensajes = $arrayListMensajes;
        }

        public function recibirAlerta($tarea){
            $this->arrayListMensajes[] = "Tiene una nueva tarea: ". $tarea;
        }

        public function visualizarAlumno($Alumno){
            foreach ($this->listaAlumnos as $alumno) {
                if($alumno == $Alumno){
                    echo "Nombre: ". $Alumno->getNombre(). "<br>";
                    echo "Apellido1: ". $Alumno->getApellido1(). "<br>";
                    echo "Apellido2: ". $Alumno->getApellido2(). "<br>";
                    echo "NumMatricula: ". $Alumno->getNumMatricula(). "<br>";
                    echo "Dirección: ". $Alumno->getDireccion(). "<br>";
                    echo "DNI: ". $Alumno->getdni(). "<br>";
                    echo "Fecha de Nacimiento: ". $Alumno->getFechNac(). "<br>";
                }
            }
        }
    }











?>
