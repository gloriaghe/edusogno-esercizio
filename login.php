<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edusogno</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Inserisci l'e-mail</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Inserisci la password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">ACCEDI</button>
  	</div>
  	<p>
  		Non hai ancora un profilo? <a href="register.php">Registrati</a>
  	</p>
  </form>
</body>
</html>