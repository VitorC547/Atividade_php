<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<body>
<div class="login">
  <h1>Login</h1>
    <form action="../actions/login_action.php" method="POST" enctype="multipart/form-data"  autocomplete="off">  
    <div class="email">
       Email: <input type="text" name="email" placeholder="Digite o seu email" required>
    </div>
  </br> 
    <div class="pwd">
      Senha:<input type="password" name="pwd" placeholder="Digite a sua senha" required>
    </div>
    </br>
    </br>     
      <input type="submit" name="submit" class="button"  value="Login">     
    </form>
    </br>
      <div class="link"><a href="userregistration.php">Cadastre-se </a></div>
      </div>
</div>  
</body>
</html>
