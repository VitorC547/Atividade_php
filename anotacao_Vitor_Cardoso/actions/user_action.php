<?php
require '../config.php';
$name =filter_input(INPUT_POST, 'name');
$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$pwd =  filter_input(INPUT_POST, 'pwd');
if ($name &&    $email && $pwd ) {
$statement= $db->prepare ('INSERT INTO  user ( name_user, email_user, pwd_user ) VALUES ( :name, :email, :pwd)');   
$statement->bindParam(':name',$name) ;
$statement->bindParam(':email',$email) ;
$statement->bindParam(':pwd',$pwd) ;
$statement->execute();
}
?>
