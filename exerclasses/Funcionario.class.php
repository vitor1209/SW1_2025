<?php
    class Funcionario{
        private string $Nome;
        private float $Salario; 

        public function __construct($nome , $salario)
        {
            $this->Nome = $nome;
            $this->Salario = ($salario >= 0) ? $salario : exit("Salario tem que ser maior que 0, não pode ser: ". $salario);
        }

        public function getNome()
        {
            return $this->Nome;
        }

        public function getSalario()
        {
            return $this->Salario;
        }

        public function aumentaSalario(float $percentual)
        {
           return $this->Salario = ((($percentual / 100) * $this->getSalario()) + $this->getSalario());
        }

        public function exibirInfo()
        {
            echo"Nome: " . $this->getnome() . "<br>";
            echo"Salario: R$ " . number_format($this->getSalario(), 2, ',', '.') . "<br>";
        }
    }
?>