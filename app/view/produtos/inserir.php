<?php
    require(dirname(__DIR__) . '../../database/Conexao.php');
    require(dirname(__DIR__) . '../../dao/Fornecedores.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstoqueManager - Inserir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .container{
            width: 80vw;
            margin: 0 auto;
        }
        select{
            display: block;
        }
        .btn-floating{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="listar.php" class="btn-floating btn-medium"><i class="material-icons">arrow_back</i></a>

        <h4>Inserir Novo Produto</h4>
        <form action="../../controller/produtos/Inserir.php" method="post">
            <input type="text" name="prod_nome" placeholder="Nome do Produto">
            <input type="number" name="prod_quant" placeholder="Quantidade">
            <input type="number" step="0.01" name="prod_preco" placeholder="Preco">
            <input type="text" name="prod_desc" placeholder="Descrição do Produto">
            <input type="date" name="prod_data">


            <select name="prod_forne">
            <?php
                $conexao = new Conexao();
                $banco = $conexao->getBanco();

                $fornecedor_dao = new FornecedorDao($banco);
                $fornecedores = $fornecedor_dao->listar();

                foreach($fornecedores as $fornecedor){
                    echo '<option value="' . $fornecedor['forn_id'] . '">';
                    echo $fornecedor['forn_nome'];
                    echo '</option>';
                }
            ?>
            </select>
            </br>
            <button class="btn waves-effect waves-light brown darken-4" type="submit" name="action">
                Salvar <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</body>
</html>