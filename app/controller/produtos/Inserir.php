<?php

require(dirname(__DIR__) . '../../models/Produtos.php');
require(dirname(__DIR__) . '../../dao/Produtos.php');
require(dirname(__DIR__) . '../../database/Conexao.php');

class ProdutosInserir{
    private $produto_dao;
    private $produto_model;
    private $fornecedores;

    public function __construct(){
        $conexao = new Conexao();
        $banco = $conexao->getBanco();
        $this->produto_model = new ProdutosModel();
        $this->produto_dao = new ProdutosDao($banco);

        $this->inserir();
    }

    private function inserir(){
        $data = date("Y-m-d",strtotime(str_replace('/','-',$_POST['prod_data'])));  

        $this->produto_model->setNome($_POST['prod_nome']);
        $this->produto_model->setQuant($_POST['prod_quant']);
        $this->produto_model->setPreco($_POST['prod_preco']);
        $this->produto_model->setDesc($_POST['prod_desc']);
        $this->produto_model->setForne($_POST['prod_forne']);
        $this->produto_model->setData($data);

        $this->produto_dao->inserir($this->produto_model);

        header('Location: ../../index.php');
    }
}

new ProdutosInserir();