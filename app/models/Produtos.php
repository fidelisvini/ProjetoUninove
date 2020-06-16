<?php

class ProdutosModel{
    private $nome;
    private $desc;
    private $preco;
    private $quant;
    private $data;
    private $forne;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setDesc($desc){
        $this->desc = $desc;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setQuant($quant){
        $this->quant = $quant;
    }
    public function setData($data){
        $this->data = $data;
    }

    public function setForne($forne){
        $this->forne = $forne;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDesc(){
        return $this->desc;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getQuant(){
        return $this->quant;
    }

    public function getData(){
        return $this->data;
    }

    public function getForne(){
        return $this->forne;
    }

}