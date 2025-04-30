<?php
    class Pessoa{
        // ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        // METODOS
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O Peso é: " . $this->Peso . "<br>";
            echo "O Altura é: " . $this->Altura . "<br>";
            echo"<hr>";
        }

        public function Apresentar(){
            echo "Oi meu nome é: " . $this->Nome . ", meu Peso é: " . $this->Peso ." e minha altura é: " . $this->Altura . " Metros!";
        }
    }
?>