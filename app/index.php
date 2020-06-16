<?php
  session_start();

  if(isset($_SESSION['nome']) && isset($_SESSION['senha'])){
    header('location: ./view/produtos/listar.php');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Estoque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
      .container{
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      .login{
        width: 20vw;
      }
    </style>
</head>
<body>
    <div class="container">
      <div class="logo">
        <h3>SmartEstoque <i class="material-icons">local_grocery_store</i></h3>
      </div>
      <div class="login">
        <form action="./controller/usuarios/Login.php" method="post">
          <div class="input-field col s6">
            <input id="first_name" name="usua_nome" type="text" class="validate" required>
            <label for="first_name">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" name="usua_senha" type="password" class="validate" required>
            <label for="last_name">Senha</label>
          </div>
          <div class="input-field col s6">
            <input class="btn" type="submit" value="Logar">
          </div>
        </form>
      </div>
    </div>
</body>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    M.updateTextFields();
  })
</script>
</html>