<?php
include("conexao.php");

if(isset($_POST["bt_email"])){

    $email = $_POST["bt_email"];

    $senha = $_POST["bt_senha"];
    
    $sql = "SELECT * FROM cadastro WHERE email = '$email' limit 1";

    $sql_exec = $mysqli->query($sql) or die ($mysqli->error);
    $usuario = $sql_exec->fetch_assoc();

   

    if(password_verify($cofirmasenha, $usuario['confirmasenha'])){

            $_SESSION["nome"] = $usuario['nome'];
            header("location: primeirapágina.php");
      }else{
        echo("<script> alert( 'Erro de senha')</script>");
      }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0; /* Cor de fundo opcional */
        }
        .centralizado {
            width: 300px;
            height: 200px;
            background-color: #4CAF50; /* Cor de fundo opcional */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class='container'>
<form class="form" method="post">
    <p class="title">Login</p>
    
        <div class="flex">
        <label>
        <input class="input" type="email" placeholder="" required="" name="bt_email" >
        <span>Email</span>
    </label>  
    </div>  
     <label>
        <input class="input" type="password" placeholder="" required="" name="bt_senha" >
        <span>Senha</span>
    </label>
    <button class="submit" >Entrar</button>
    <p class="signin">Não tem uma conta? <a href="cadastro.php">Cadastra-se</a> </p>
</form>
</div>
</body>
</html>