<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "È necessario eseguire il login prima";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <header>
        <a href="index.php"><img src="assets/img/logo.svg" alt="logo Edusogno"></a>
    </header>

    <div class="container">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['email'])): ?>
        <h2>Benvenuto
            <?php echo $_SESSION['email']; ?>
            !!!
        </h2>
        <p> <a href="index.php?logout='1'">Esci</a> </p>
        <?php endif ?>
    </div>
    <img src="assets/img/ellisse.svg" id="ellisse"></img>
    <img src="assets/img/ellissePiccola.svg" id="ellissePiccola"></img>
    <img src="assets/img/vettorechiaro.svg" id="vettorechiaro"></img>
    <img src="assets/img/vettoreScuro.svg" id="vettorescuro"></img>
    <img src="assets/img/vettoreBianco.svg" id="vettoreBianco"></img>
    <img src="assets/img/razzo.svg" id="razzo"></img>
</body>

</html>