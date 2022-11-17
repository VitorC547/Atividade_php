<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <script src="../js/validate.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">   
</head>
<body>
<div class="login">
    <form method="POST" action="userregistration.php">
        <h1>Cadastro</h1>
    
        <div class="name">
                Nome:<input type="text"  id="name" name="name" placeholder="Digite seu nome" required> 
        </div>
        </br>
        <div class="email">
                Email:<input type="email" id="email" name="email"  placeholder="Digite seu email"required  >
        </div>
        </br>
        <div class="pwd">
        Senha:<input id="pwd" name="pwd"type="password"   placeholder="Digite sua senha" required>
        </div>
        </br>
        <div class="pwd2">
                Repita a sua senha: <input id="pwd2" name="pwd2"type="password"  placeholder="Digite sua senha" required>
        </div>
        </br>
                <input type="submit" class="submit" value="Cadastrar">
    </form>
    </br>
        <div class="link"><a href="login.php">Voltar </a></div>
    <?php
    require '../actions/user_action.php';
    ?> 
</body>
</html>