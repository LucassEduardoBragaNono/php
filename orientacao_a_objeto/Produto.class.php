<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.00
    ) {}
    //métodos gets e sets
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome) //nao precisa ser o mesmo nome
    {
        $this->nome = $nome;
    } 
    //
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao) //nao precisa ser o mesmo nome
    {
        $this->descricao = $descricao;
    } 
    //
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoque) //nao precisa ser o mesmo nome
    {
        $this->estoque = $estoque;
    } 
    //
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco) //nao precisa ser o mesmo nome
    {
        $this->preco = $preco;
    } 
}
?>
