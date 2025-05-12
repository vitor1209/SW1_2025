<?php
    Class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor <= $this->Saldo) {
                $this->Saldo -= $valor;
                $msg = "saque realizado. Saldo atual é: ". $this->Saldo. "<br>";
            } else {
                $msg = "Não a saldo suficiente para realizar a operação. Saldo atual é: ". $this->Saldo. "<br>";
            }
            return $msg;
        }

        public function Depositar($valor){
            $this->Saldo += $valor;
            $msg = "Deposito realizado. Saldo atual é: ". $this->Saldo . "<br>";
            return $msg;
        }

        public function MostarSaldo(){
            // echo $this->Nome . " Seu saldo é: " . $this->Saldo;
            echo "Nome: " . $this->Nome . "<br>";   
            echo "Cpf: " . $this->Cpf . "<br>";    
            echo "Saldo: " . $this->Saldo . "<br>"; 
        }
    }
?>