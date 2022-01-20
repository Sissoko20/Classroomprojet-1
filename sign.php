<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../bootstrap-5.0.2-examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="signup.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Connectez-vous </h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="mail" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <p><a href="createaccount.html"> Creer un compte </a></p> 
      </label>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Connect</button>
    
  </form>
</main>
<!-- JavaScript Bundle with Popper -->
<script src="../js/bootstrap.bundle.js"></script>
<?php
try {
  $db333= new PDO ('mysql:host=localhost;dbname=minichat','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  die('Erreur'.$e->getMessage());
}

?>
  </body>
</html>
