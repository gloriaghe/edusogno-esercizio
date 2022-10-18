<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Edusogno</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
	<header></header>
	<section class="container">
			<h1>Crea il tuo account</h1>

			<form method="post" action="register.php" id="formRegistration">
				<?php include('errors.php'); ?>
				<label class="label" for="nome">Inserisci il nome</label>
				<input class="input" type="text" name="nome" id="nome"
					value="<?php echo $nome; ?>">
				<span class="line" ></span>
				<label class="label" for="cognome">Inserisci il cognome</label>
				<input class="input" type="text" name="cognome" id="cognome"
					value="<?php echo $cognome; ?>">
				<span class="line" ></span>
				<label class="label" for="email">Inserisci l'email</label>
				<input class="input" type="email" name="email" id="email"
					value="<?php echo $email; ?>">
				<span class="line" ></span>
				<label class="label" for="password">Inserisci la password</label>
				<input class="input" type="text" name="password" id="password">
				<span class="line" ></span>
				<button type="submit" class="button" name="reg_user" id="buttonRegistration">REGISTRATI</button>
				<p>
					Hai già un account? <a href="login.php">Accedi</a>
				</p>
			</form>
		
	</section>

</body>

</html>