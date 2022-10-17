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
				
			<form method="post" action="register.php"  id="rectangle9">
				<?php include('errors.php'); ?>
				<label class="label" id="registrationLabelName" for="nome">Inserisci il nome</label>
					<input class="input" id="registrationInputName" type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
					<span class="line" id="line1"></span>
					<label class="label" id="registrationLabelCognome" for="cognome">Inserisci il cognome</label>
					<input class="input" id="registrationInputCognome" type="text" name="cognome" id="cognome" value="<?php echo $cognome; ?>">
					<span class="line" id="line2"></span>
					<label class="label" id="registrationLabelEmail" for="email">Inserisci l'email</label>
					<input class="input" id="registrationInputEmail" type="email" name="email" id="email"  value="<?php echo $email; ?>">
					<span class="line" id="line3"></span>
					<label class="label" id="registrationLabelPassword" for="password">Inserisci la password</label>
					<input class="input" id="registrationInputPassword" type="text" name="password" id="password">
					<span class="line" id="line4"></span>
					<button type="submit" class="btn" name="reg_user" id="buttonRegistration">REGISTRATI</button>
  			</form>
  		</div>
    </section>
  
</body>
</html>