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
		<h1>Crea il tuo account</h1>

		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<label for="nome">Inserisci il nome</label>
			<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
			<label for="cognome">Inserisci il cognome</label>
			<input type="text" name="cognome" id="cognome" value="<?php echo $cognome; ?>">
			<label for="email">Inserisci l'email</label>
			<input type="email" name="email" id="email" value="<?php echo $email; ?>">
			<label for="password" placeholder="nome@exemple.com">Inserisci la password</label>
			<div id="occhio">
				<img src="assets/img/occhio.svg" alt="vedi password">
			</div>
			<input type="text" name="password" id="password" placeholder="Scrivila qui">
			<button type="submit" class="button" name="reg_user" id="buttonRegistration">REGISTRATI</button>
			<a href="login.php" id="confirm">
				Hai già un account? <span>Accedi</span>
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