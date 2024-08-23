<?php
include("conexao.php");

// Verifica se o formulário foi enviado
if(isset($_POST["bt_nome"])) {
    // Coleta os dados do formulário
    $nome = $_POST['bt_nome'];
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $confirmesenha = $_POST['bt_confirmesenha'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmesenha) {
        // Criptografa a senha
        $senha = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);

        // Prepara a instrução SQL para evitar injeção de SQL
        $mysqli->query("INSERT INTO cadastro (nome, email, senha, confirmasenha) values('$nome', '$email', '$senha', '$confirmesenha')") or
            die($mysqlierrno);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página de cadastro</title>
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
<div class='conteiner'>
<form class="form" method="post">
    <p class="title">Cadastro</p>
    <p class="message">Cadastra-se agora e tenha acesso total ao nosso aplicativo. </p>
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required=""  name="bt_nome" placeholder="Nome" required>
            <span>Nome:</span>
        </label>

    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="" name="bt_email" placeholder="Email" required>
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" required="" name="bt_senha" placeholder="Senha" required>
        <span>Senha</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="" name="bt_confirmesenha" placeholder="confirmesenha" required>
        <span>Confirme Senha</span>
    </label>
    <button class="submit" type="submit">Enviar</button>
    <p class="signin">Já tem uma conta ? <a href="login.php">Entrar</a> </p>
</form>
</div>
</body>
</html>