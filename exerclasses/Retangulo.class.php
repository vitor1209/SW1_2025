<?php
    class Retangulo{
        private float $Largura;
        private float $Altura;

        public function __construct($Largura , $Altura)
        {
            $this->Largura = $Largura;
            $this->Altura = $Altura;
        }

        public function getLargura()
        {
            return $this->Largura;
        }

        public function getAltura()
        {
            return $this->Altura;
        }

        public function setLargura(float $l)
        {
            return $this->Largura = $l;
        }

        public function setAltura(float $a)
        {
            return $this->Altura = $a;
        }

        public function calcularArea()
        {
            return $this->getLargura() * $this->getAltura();
        }

        public function calcularPerimetro()
        {
            return 2 * ($this->getLargura() + $this->getAltura());
        }

        public function InfoRetangulo(){
            echo"Largura: " . $this->getLargura() . "<br>";
            echo"Altura: " . $this->getAltura() . "<br>";
            echo"Area: " . $this->calcularArea() . "<br>";
            echo"Perimetro: " . $this->calcularPerimetro() . "<br>";
        }
    }
?>