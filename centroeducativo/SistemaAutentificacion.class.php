<?php

    class SistemaAutentificacion{

        private $usuarios = []; 
        private $administradores = [];

        public function __construct() {
            $this->usuarios[] = new Usuario("admin", "admin");
            $this->administradores[] = new Usuario("admin", "admin");
        }
        
        public function getUsuarios() {
            return $this->usuarios;
        }
        
        public function setUsuarios($usuarios) {
            $this->usuarios = $usuarios;
        }
        
        public function getAdministradores() {
            return $this->administradores;
        }
        
        public function setAdministradores($administradores) {
            $this->administradores = $administradores;
        }

        public function registrarUsuario(Usuario $usuario) {
            $this->usuarios[] = $usuario;
        }
        
        public function registrarAdministrador(Administrador $admin) {
            $this->administradores[] = $admin;
        }
    
        public function autenticarUsuario($nombreUsuario, $contrasena) {
            foreach ($this->usuarios as $usuario) {
                if ($usuario->nombreUsuario === $nombreUsuario && $usuario->contrasena === $contrasena) {
                    return true; 
                }
            }
            return false; 
        }
        
        public function autenticarAdministrador($nombre, $numeroEmpleadoCentro) {
            foreach ($this->administradores as $admin) {
                if ($admin->getNombre() === $nombre && $admin->getNumeroEmpleadoCentro() === $numeroEmpleadoCentro) {
                    return true; 
                }
            }
            return false; 
    

        }
    }

?>