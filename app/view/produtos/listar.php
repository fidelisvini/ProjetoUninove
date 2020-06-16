<?php
    require('../../controller/produtos/Listar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Estoque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
  .brand-logo{
    margin-left: 30px;
  }
  .conteudo{
    padding: 20px;
  }
</style>
<body>
    <nav>
      <div class="nav-wrapper brown darken-4">
        <a href="#" class="brand-logo">SmartEstoque <i class="material-icons">local_grocery_store</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="inserir.php">Inserir Produto</a></li>
          <li><a href="../fornecedores/inserir.php">Inserir Fornecedor</a></li>
          <li><a href="../../controller/usuarios/Logout.php">sair</a></li>
        </ul>
      </div>
    </nav>
    <div class="conteudo">
        <h6>Produtos em Estoque</h6>
        <table>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Descrição</th>
                <th>Data Compra</th>
                <th>Fornecedor</th>
            </tr>
            <?php new ProdutoListar(); ?>
        </table>
    </div>
</body>
</html>