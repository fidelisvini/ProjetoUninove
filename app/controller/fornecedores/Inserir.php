<?php

require(dirname(__DIR__) . '../../models/Fornecedores.php');
require(dirname(__DIR__) . '../../dao/Fornecedores.php');
require(dirname(__DIR__) . '../../database/Conexao.php');

class FornecedorInserir{
    private $fornecedor_dao;
    private $fornecedor_model;

    public function __construct(){
        $conexao = new Conexao();
        $banco = $conexao->getBanco();
        $this->fornecedor_model = new FornecedorModel();
        $this->fornecedor_dao = new FornecedorDao($banco);

        $this->inserir();
    }

    private function inserir(){
        $this->fornecedor_model->setNome($_POST['forn_nome']);
        $this->fornecedor_model->setCnpj($_POST['forn_cnpj']);
        $this->fornecedor_model->setTelefone($_POST['forn_telefone']);

        $this->fornecedor_dao->inserir($this->fornecedor_model);

        header('Location: ../../index.php');
    }
}

new FornecedorInserir();