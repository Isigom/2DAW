<?php

class Tutor extends Centro {
    private $arrayListAlumnos;
    private $arrayListMensajes;

    public function __construct($arrayListAlumnos = array(), $arrayListMensajes = array()) {
        $this->arrayListAlumnos = $arrayListAlumnos;
        $this->arrayListMensajes = $arrayListMensajes;
    }

    public function getArrayListAlumnos() {
        return $this->arrayListAlumnos;
    }

    public function setArrayListAlumnos($arrayListAlumnos) {
        $this->arrayListAlumnos = $arrayListAlumnos;
    }
    
    public function getArrayListMensajes() {
        return $this->arrayListMensajes;
    }
    
    public function setArrayListMensajes($arrayListMensajes) {
        $this->arrayListMensajes = $arrayListMensajes;
    }

    public function difundirMensaje($alumnoDestino, $mensaje) {
        foreach ($this->arrayListAlumnos as $alumno) {

            if($alumno == $alumnoDestino){
                echo $this.getNombre()." ha difundido el siguiente mensaje a ". $alumnoDestino->getListaPadres[0] . $mensaje;
                $this->arrayListMensajes[] = $mensaje;
                $alumnoDestino->getListaPadres[0]->recibirAlerta($mensaje);
                $this->alertaNuevaTarea($mensaje);
            }
        }
    }

    public function subirFoto($foto) {
    }

    public function adjuntarArchivo($archivo) {
    }

    public function alertaNuevaTarea($tarea) {
        $this->arrayListMensajes[] = "Nueva tarea: " . $tarea;
    }
}


?>