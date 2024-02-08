<html>
    <head>
        <meta charset="utf-8">
        <title>Partida</title>
    </head>
    <body>
        <?php

            class Partida {
                private $dia;
                private $etapa;
                private $arrayVerCartas;
                private $arrayVerCartasRival;
                private $arrayVerCartasTienda;
                private $cartas;

                public function __construct($dia, $etapa, Carta $carta) {
                    $this->dia = $dia;
                    $this->etapa = $etapa;
                    $this->arrayVerCartas = [];
                    $this->arrayVerCartasRival = [];
                    $this->arrayVerCartasTienda = [];
                    $this->cartas[] = $carta;
                }

                public function getDia() {
                    return $this->dia;
                }

                public function setDia($dia) {
                    return $this->dia = $dia;
                }

                public function getEtapa() {
                    return $this->etapa;
                }

                public function setEtapa($etapa) {
                    return $this->etapa = $etapa;
                }

                public function armarCartel() {
                
                }

                public function comprar() {
                
                }

                public function jugar() {
                
                }

                public function verCartas() {
                    return $this->arrayVerCartas;
                }

                public function verCartasRival() {
                    return $this->arrayVerCartasRival;
                }

                public function verCartasTienda() {
                    return $this->arrayVerCartasTienda;
                }
            }

                abstract class Jugador extends Partida {
                    public function jugar() {
                
                    }
            }

            class Carta {
                private $tipo;
                private $puntos;

                public function __construct($tipo, $puntos) {
                    $this->tipo = $tipo;
                    $this->puntos = $puntos;
                }

                public function getTipo() {
                    return $this->tipo;
                }

                public function setTipo($tipo) {
                    return $this->tipo = $tipo;
                }

                public function getPuntos() {
                    return $this->puntos;
                }

                public function setPuntos($puntos) {
                    return $this->puntos = $puntos;
                }

                public function cartas() {
                    return $this->arrayCartas;
                }
            }

            class Cartel extends Carta {
                private $borde;
                private $color;
                private $efecto;
                private $mensaje;

                public function __construct($borde, $color, $efecto, $mensaje) {
                    parent::__construct('', 0); 
                    $this->borde = $borde;
                    $this->color = $color;
                    $this->efecto = $efecto;
                    $this->mensaje = $mensaje;
                }

                

                public function obtenerPuntos() {
                    
                }
            }



            class enTipoCarta{

                const borde= 1;
                const color = 2;
                const efecto = 3;
                const mensaje = 4;
                const marco = 5;

            }

            class EnEtapa{

                const compra = 1;
                const armado = 2;
                const resultado = 3;
                const fin = 4;

            }

            class Prueba{
                

            }



    ?>
    </body>
</html>
