<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Edusogno</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
	<section id="rectangle2">
		<div id="rectangle1">
			<h1>Crea il tuo account</h1>
			<form method="post" action="login.php" id="formLogin">
				<?php include('errors.php'); ?>
					<label class="label" id="Label1">Inserisci l'e-mail</label>
					<input class="input" id="Input1" type="text" name="email">
					<span class="line" id="line1"></span>
					<label class="label" id="Label2">Inserisci la password</label>
					<input class="input" id="Input2" type="password" name="password">
					<span class="line" id="line2"></span>
					<button type="submit" class="button" name="login_user" id="buttonLogin">ACCEDI</button>
				<p>
					Non hai ancora un profilo? <a href="register.php">Registrati</a>
				</p>
			</form>
		</div>
	</section>
</body>

</html>