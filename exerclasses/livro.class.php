<?php
    class Livro{
        private string $Titulo;
        private string $Autor;
        private bool $Disponivel;

    public function __construct($Titulo , $Autor , $Disponivel = true)
    {
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->Disponivel = $Disponivel;
    }

    public function getDisponivel()
    {
        return $this->Disponivel;
    }

    public function getAutor()
    {
        return $this->Autor;
    }

    public function getTitulo()
    {
        return $this->Titulo;
    }

    public function Trocar()
    {
        return $this->Disponivel = ($this->Disponivel == true) ? false : true;
    }

    public function exibirStatus() 
    {        
        $status = ($this->getDisponivel() == true) ? "Disponivel" : "Emprestado";
        echo"Titulo : " . $this->getTitulo() . "<br>";
        echo"Autor : " . $this->getAutor() . "<br>";
        echo"Status : " . $status . "<br>";
    }
}
?>