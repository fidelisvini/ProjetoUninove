<?php

class FornecedorModel{
    private $nome;
    private $cnpj;
    private $telefone;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}