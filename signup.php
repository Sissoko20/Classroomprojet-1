<?php
try {
  $db1= new PDO ('mysql:host=localhost;dbname=minichat','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  die('Erreur'.$e->getMessage());
}

$reqq=$db1->prepare('INSERT INTO signup (mail,pass) VALUES(?,?)');
$reqq->execute(array($_POST['mail'],$_POST['pass']));
header('Location:index.php');





?>


  </body>
</html>
