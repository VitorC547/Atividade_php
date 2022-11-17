<?php
require "../config.php";
require "../actions/annotation_action.php";
if (isset($_SESSION['Id_user']) &&  !empty($_SESSION['Id_user']) ):?>
<?php else: header("Location: ../pages/login.php"); endif;   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Anotação</title>
</head>
<body>
<div class="login">
<form method="POST" action="annotation.php" >
         <h1>Sistema de anotação</h1>
         </br>
        Titulo:<input type="text"  id="title" name="tile"  placeholder="Digite o titulo da sua anotação" required> 
    </div>
    </br>
    <div class="conteudo">
        Conteudo:<textarea id="contents" name="contents"  placeholder="Anote aqui " required  ></textarea>
    </div>
    </br>
        <input type="submit" class="button"  value="Anotar  ">
    </form>
    </br>
     <a href="../actions/logout.php">Sair</a>
    </br>
<h3>Anotações</h3>
</body>
</html>
</div>
    <div class="table">
    <table >
        <?php foreach ($select as $i): ?>
            <tr>
                <th><?php echo $i["title"] . "</br>"; ?></th>
            </tr>
            <tr>
            <td><?php echo $i["content"]. "</br>"; ?> </td> 
            </tr>
    <?php endforeach; ?>
    </table>