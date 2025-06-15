<?php
   class Aluno{
    private string $nome;
    private float $nota1;
    private float $nota2;

    public function __construct($nome, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->nota1 = ($nota1 >= 0 && $nota1 <= 10) ? $nota1 : exit("Nota 1 tem que ser de 0 a 10, não pode ser " . $nota1);
        $this->nota2 = ($nota2 >= 0 && $nota2 <= 10) ? $nota2 : exit("Nota 2 tem que ser de 0 a 10, não pode ser " . $nota2);
    }

    public function getnome()
    {
        return $this->nome;
    }

    public function getnota1()
    {
        return $this->nota1;
    }

    public function getnota2()
    {
        return $this->nota2;
    }

    public function Media($nota1 = null, $nota2 = null)
    {
        $nota1 = ($nota1 == null) ? $this->getnota1() : $nota1;
        $nota2 = ($nota2 == null) ? $this->getnota2() : $nota2;
        return ($nota1 + $nota2) / 2;
    }

    public function verificarSituacao() 
    {        
        return $situacao = ($this->Media() >= 7) ? "Aprovado" : "Reprovado";
    }

    public function ResumoAluno() 
    {        
        echo"Nome : " . $this->getnome() . "<br>";
        echo"Nota 1 : " . $this->getnota1() . "<br>";
        echo"Nota 2 : " . $this->getnota2() . "<br>";
        echo"Media : " . round($this->Media(),2) . "<br>";
        echo"Situação : " . $this->verificarSituacao() . "<br>";
    }
   }
?>