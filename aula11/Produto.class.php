<?php 

class Produto{

    private $Nome;
    private $Preco;
    private $Quantidade;

    public function __construct($Nome , $Preco , $Quantidade){
        $this->Nome = $Nome;
        $this->Preco = $Preco;
        $this->Quantidade = $Quantidade;
    }
    
    //get
    public function getNome(){
        return $this->Nome;
    }

    public function getPreco(){
        return $this->Preco;
    }

    //set

    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    public function setPreco($Preco){
        $this->Preco = $Preco;
    }

    public function adicionarEstoque($qtd){
        if($qtd > 0){
            return $this->Quantidade += $qtd;
        } else {
            echo"A quantidade tem que ser maior que 0!!";
        }
    }

    public function removerEstoque($qtd){
        if($qtd > 0 and $this->Quantidade >= $qtd){
            return $this->Quantidade -= $qtd;
        } else {
            echo"A quantidade tem que ser maior que 0!!";
        }
    }

    public function mostrarDetalhes(){
        echo "Produto: " . $this->Nome . "<br>";   
        echo "Preço: R$" . number_format($this->Preco,2,',','.') . "<br>";    
        echo "Quantidade em estoque: " . $this->Quantidade . "<br>";   
    }

}
?>