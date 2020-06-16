<?php

class Conexao{
    private $banco;

    public function __construct(){
        $this->banco = new mysqli('localhost', 'root', '','projetodb');
    }

    public function getBanco(){
        return $this->banco;
    }
}