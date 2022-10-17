<?php
session_start();

$nome = "";
$cognome = "";
$email = "";
$errors = array();

// connessione database
$db = mysqli_connect('localhost:3306', 'root', 'root', 'edusogno');

// Registrazione
if (isset($_POST['reg_user'])) {
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $cognome = mysqli_real_escape_string($db, $_POST['cognome']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($nome)) {
    array_push($errors, "Il nome è richiesto");
  }
  if (empty($cognome)) {
    array_push($errors, "Il cognome è richiesto");
  }

  if (empty($email)) {
    array_push($errors, "La Email è richiesta");
  }
  if (empty($password)) {
    array_push($errors, "La Password è richiesto");
  }

  $user_check_query = "SELECT * FROM utenti WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // se esiste l'utente


    if ($user['email'] === $email) {
      array_push($errors, "La Email è già registrata");
    }
  }


  if (count($errors) == 0) {
    $password = ($password);

    $query = "INSERT INTO utenti (nome, cognome, email, password) 
  			  VALUES('$nome','$cognome', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Sei loggato";
    header('location: index.php');
  }
}

// Login
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $nome = mysqli_real_escape_string($db, $_POST['nome']);
  $cognome = mysqli_real_escape_string($db, $_POST['cognome']);

  if (empty($email)) {
    array_push($errors, "La Email è richiesta");
  }
  if (empty($password)) {
    array_push($errors, "La Password è richiesta");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "Sei loggato";
      header('location: eventi.php');
    } else {
      array_push($errors, "Email o Password errati");
    }

  }
}

// Eventi
$email = $_SESSION['email'];
$query = "SELECT * FROM `eventi` WHERE `attendees` LIKE '%$email%'";
if ($db->error) {
  error_log('Errore: ' . $db->error);
}
$result = mysqli_query($db, $query);
$eventiUtente = $result->fetch_all(MYSQLI_ASSOC);
?>