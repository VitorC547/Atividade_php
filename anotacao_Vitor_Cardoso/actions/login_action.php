<?php	
require '../config.php';


$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$pwd =  filter_input(INPUT_POST, 'pwd');




if ($email && $pwd){


  $sql= "SELECT  * FROM  user  where email_user=:email  AND pwd_user= :pwd "; 
  $sql = $db->prepare($sql);
  $sql->bindValue(':email',$email) ;
  $sql->bindValue(':pwd',$pwd) ;
  $sql->execute();
   if ($sql->rowCount()>0) {
     $data= $sql->fetch();
     echo $data['Id_user'];
     $_SESSION['Id_user'] = $data['Id_user'];
   }
      if(isset($_SESSION['Id_user'])){
        header("Location: ../pages/annotation.php");
      } else{
       header("Location: ../pages/login.php");
      }
    } else{
   header("Location: ../pages/login.php");
} 
?>
