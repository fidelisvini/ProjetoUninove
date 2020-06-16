<?php

class UsuariosDao{
    private $banco;

    public function __construct($banco){
        $this->banco = $banco;
    }

    public function buscar($usuario){
        $nome = $usuario->getNome();
        $senha = $usuario->getSenha();

        $resultado = $this->banco->query("SELECT * FROM usua_usuario WHERE usua_nome = '$nome' AND usua_senha = '$senha'");

        $usuario_logado = $resultado->fetch_assoc();
        
        return $usuario_logado;
    }
}