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

			<form method="post" action="register.php" id="formRegistration">
				<?php include('errors.php'); ?>
				<label class="label" id="Label1" for="nome">Inserisci il nome</label>
				<input class="input" id="Input1" type="text" name="nome" id="nome"
					value="<?php echo $nome; ?>">
				<span class="line" id="line1"></span>
				<label class="label" id="Label2" for="cognome">Inserisci il cognome</label>
				<input class="input" id="Input2" type="text" name="cognome" id="cognome"
					value="<?php echo $cognome; ?>">
				<span class="line" id="line2"></span>
				<label class="label" id="Label3" for="email">Inserisci l'email</label>
				<input class="input" id="Input3" type="email" name="email" id="email"
					value="<?php echo $email; ?>">
				<span class="line" id="line3"></span>
				<label class="label" id="Label4" for="password">Inserisci la password</label>
				<input class="input" id="Input4" type="text" name="password" id="password">
				<span class="line" id="line4"></span>
				<button type="submit" class="button" name="reg_user" id="buttonRegistration">REGISTRATI</button>
				<p>
					Hai già un account? <a href="login.php">Accedi</a>
				</p>
			</form>
		</div>
	</section>

</body>

</html>