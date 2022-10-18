<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Edusogno</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
<header>
	<img src="assets/img/logo.svg" alt="logo Edusogno">
</header>

	<section class="container">
			<h1>Hai già un account?</h1>
			<form method="post" action="login.php" id="formLogin">
				<?php include('errors.php'); ?>
					<label class="label">Inserisci l'e-mail</label>
					<input class="input" type="text" name="email">
					<span class="line" ></span>
					<label class="label" >Inserisci la password</label>
					<input class="input"  type="password" name="password">
					<span class="line" ></span>
					<button type="submit" class="button" name="login_user" id="buttonLogin">ACCEDI</button>
				<p>
					Non hai ancora un profilo? <a href="register.php">Registrati</a>
				</p>
			</form>
	</section>
</body>

</html>