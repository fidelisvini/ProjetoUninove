<?php
require(dirname(__DIR__) . '../../database/Conexao.php');
require(dirname(__DIR__) . '../../dao/Produtos.php');


class ProdutoListar{
    private $lista_de_produtos;

    public function __construct(){
        $conexao = new Conexao();
        $banco = $conexao->getBanco();
        $produto_dao = new ProdutosDao($banco);
        $this->lista_de_produtos = $produto_dao->listar();

        $this->renderizarProdutos();
    }

    private function renderizarProdutos(){
        foreach($this->lista_de_produtos as $produto){
            echo "<tr>";
            echo "<td>" . $produto['prod_nome'] . "</td>";
            echo "<td>" . $produto['prod_quant'] . "</td>";
            echo "<td>" . $produto['prod_preco'] . "</td>";
            echo "<td>" . $produto['prod_desc'] . "</td>";
            echo "<td>" . $produto['prod_data'] . "</td>";
            echo "<td>" . $produto['forn_nome'] . "</td>";
            echo "</tr>";
        }
    }
}