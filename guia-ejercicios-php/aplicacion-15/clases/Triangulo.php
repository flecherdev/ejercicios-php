<?php

    include_once "FiguraGeometrica.php";
    /**
     *
     */

    class Triangulo extends FiguraGeometrica
    {

        #Atributos
        private $_altura;
        private $_base;

        #Constructor
        function __construct($base,$altura)
        {
            parent::__construct();
            $this->_base = $base;
            $this->_altura = $altura;
            $this->calcularDatos();
        }

        #Metodos
        protected function calcularDatos(){
             $this->_perimetro = (2 * $this->_altura) + $this->_base;
             $this->_superficie = ($this->_base*$this->_altura)/2;
        }

        public function dibujar()
        {
            echo "####### Dibuja triangulo #######".'<br>';
        /*    for ($i=1; $i <= $this->_altura ; $i++) {

        } */
        }

        public function toString(){
            echo "####### Datos triangulo #######".'<br>';
            $string = "Base: ".$this->_base.'<br>'.
                      "Altura: ".$this->_altura.'<br>'.
                      parent::toString();
            return $string;
        }

    }

 ?>
