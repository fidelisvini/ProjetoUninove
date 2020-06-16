<?php

class FornecedorDao{
    private $banco;

    public function __construct($banco){
        $this->banco = $banco;
    }

    public function listar(){
        $resultados = $this->banco->query('select * from forn_fornecedor');
        $fornecedores = array();

        while($linhas = $resultados->fetch_array(MYSQLI_ASSOC)){
            array_push($fornecedores, $linhas);
        }

        return $fornecedores;
    }

    public function inserir($fornecedor){
        $nome = $fornecedor->getNome();
        $cnpj = $fornecedor->getCnpj();
        $telefone = $fornecedor->getTelefone();

        $query = 'insert into forn_fornecedor (forn_nome, forn_cnpj, forn_telefone) values (?, ?, ?)';
        $stmt = $this->banco->prepare($query);
        $stmt->bind_param('sss', $nome, $cnpj, $telefone);
        $stmt->execute();
        $stmt->close();
    }
}