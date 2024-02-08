<?php
    class Usuario {
        protected $nombreUsuario;
        protected $contrasena;

        public function __construct($nombreUsuario, $contrasena) {
            $this->nombreUsuario = $nombreUsuario;
            $this->contrasena = $contrasena;

        }

        public function getNombreUsuario() {
            return $this->nombreUsuario;
        }

        public function setNombreUsuario($nombreUsuario) {
            return $this->nombreUsuario = $nombreUsuario;
        }

        public function getContrasena() {
            return $this->contrasena;
        }

        public function setContrasena($contrasena) {
            return $this->contrasena = $contrasena;
        }



    }
?>