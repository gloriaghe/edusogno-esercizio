<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Edusogno</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
	<header>
		<a href="index.php"><img src="assets/img/logo.svg" alt="logo Edusogno"></a>
	</header>

	<section class="container">
		<h1>Hai già un account?</h1>
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			<label>Inserisci l'e-mail</label>
			<input type="text" name="email" placeholder="nome@exemple.com" >
			<label>Inserisci la password</label>
			<div id="occhio">
				<img src="assets/img/occhio.svg" alt="vedi password">
			</div>
			<input type="text" name="password" placeholder="Scrivila qui">
			<button type="submit" class="button" name="login_user" id="buttonLogin">ACCEDI</button>
			<a href="register.php" id="confirm">
				Non hai ancora un profilo? <span>Registrati</span>
			</a>
		</form>
		<img src="assets/img/ellisse.svg" id="ellisse"></img>
		<img src="assets/img/ellissePiccola.svg" id="ellissePiccola"></img>
		<img src="assets/img/vettorechiaro.svg" id="vettorechiaro"></img>
		<img src="assets/img/vettoreScuro.svg" id="vettorescuro"></img>
		<img src="assets/img/vettoreBianco.svg" id="vettoreBianco"></img>
		<img src="assets/img/razzo.svg" id="razzo"></img>
	</section>

</body>

</html>