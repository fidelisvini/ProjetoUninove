<?php

class ProdutosDao{
    private $banco;

    public function __construct($banco){
        $this->banco = $banco;
    }

    public function listar(){
        $resultados = $this->banco->query('select prod_id, prod_nome, prod_desc, prod_quant, prod_preco, prod_data, forn_nome from prod_produto inner join forn_fornecedor on prod_produto.prod_fornecedor = forn_fornecedor.forn_id');
        $produtos = array();

        while($linhas = $resultados->fetch_array(MYSQLI_ASSOC)){
            array_push($produtos, $linhas);
        }

        return $produtos;
    }

    public function inserir($produto){
        $nome = $produto->getNome();
        $quant = $produto->getQuant();
        $preco = $produto->getPreco();
        $desc = $produto->getDesc();
        $data = $produto->getData();
        $forne = $produto->getForne();

        $query = 'insert into prod_produto (prod_nome, prod_quant, prod_preco, prod_desc, prod_data, prod_fornecedor) values (?, ?, ?, ?, ?, ?)';
        $stmt = $this->banco->prepare($query);
        $stmt->bind_param('ssssss', $nome, $quant, $preco, $desc, $data, $forne);
        $stmt->execute();
        $stmt->close();
    }
}