<?php
$title =filter_input(INPUT_POST, 'title');
$content =filter_input(INPUT_POST, 'content');
$id= $_SESSION['Id_user'];
if ($title &&    $content) {  
$statement= $db->prepare ('INSERT INTO  annotation ( Id_user, title, content ) VALUES (  :id, :title, :content)');   
$statement->bindParam(':id',$id) ;
$statement->bindParam(':title',$title) ;
$statement->bindParam(':content',$content) ;
$statement->execute();
}
$statement = $db->prepare("SELECT    title,content FROM annotation WHERE  Id_user =:Id_user");
$statement->bindValue(':Id_user', $id);
$statement->execute();
$select = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
