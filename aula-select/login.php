<!DOCTYPE html>
<html lang="en">
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
<div class='conteiner'>
<form class="form" method="post">
    <p class="title">Login</p>
    
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required=""  name="bt_nome" placeholder="Nome" required>
            <span>Nome:</span>
        </label>
    </div>  
     <label>
        <input class="input" type="password" placeholder="" required="" name="bt_senha" placeholder="Senha" required>
        <span>Senha</span>
    </label>
    <button class="submit" >Entrar</button>
    <p class="signin">Não tem uma conta? <a href="cadastro.php">Cadastra-se</a> </p>
</form>
</div>
</body>
</html>