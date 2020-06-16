<?php

require(dirname(__DIR__) . '../../models/Usuarios.php');
require(dirname(__DIR__) . '../../database/Conexao.php');
require(dirname(__DIR__) . '../../dao/Usuarios.php');

class Login{
    private $usuario_dao;
    private $usuario_model;
    private $usuario;

    public function __construct(){
        session_start();
        $conexao = new Conexao();
        $banco = $conexao->getBanco();
        $this->usuario_model = new UsuariosModel();
        $this->usuario_dao = new UsuariosDao($banco);

        $this->logar();
    }

    private function logar(){
        $this->usuario_model->setNome($_POST["usua_nome"]);
        $this->usuario_model->setSenha($_POST["usua_senha"]);

        $this->usuario = $this->usuario_dao->buscar($this->usuario_model);

        if(!empty($this->usuario)){
            $_SESSION['nome'] = $this->usuario['usua_nome'];
            $_SESSION['senha'] = $this->usuario['usua_senha'];
            header('location: ../../view/produtos/listar.php');
        }else{
            unset ($_SESSION['nome']);
            unset ($_SESSION['senha']);
            header('Location: ../../index.php');
   
        }
    }
}

new Login();