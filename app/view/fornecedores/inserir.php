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
        .btn-floating{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="../produtos/listar.php" class="btn-floating btn-medium"><i class="material-icons">arrow_back</i></a>
        <h4>Inserir Novo Fornecedor</h4>
        <form action="../../controller/fornecedores/Inserir.php" method="post">
            <input type="text" name="forn_nome" placeholder="Nome do Fornecedor">
            <input type="text" name="forn_cnpj" placeholder="CNPJ">
            <input type="tel" name="forn_telefone" placeholder="Telefone">

            <button class="btn waves-effect waves-light brown darken-4" type="submit" name="action">
                Salvar <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</body>
</html>