<?php include('server.php');
?>
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
        <?php if (isset($_SESSION['success'])): ?>       
            <div class="containerEventi">
                <h2>Ciao ecco i tuoi eventi</h2>
                <div id="eventi">

                    <?php if (count($eventiUtente) > 0): ?>
                    <?php foreach ($eventiUtente as $evento): ?>

                    <div class="evento">
                        <h3><?= $evento['nome_evento'] ?></h3>
                        <div><?= $evento['data_evento'] ?></div>
                        <button name="join" class="button">JOIN</button>
                    </div>

                    <?php endforeach; ?>
                    <?php else: ?>
                    <h3>Non hai eventi</h3>
                    <?php endif; ?>
                </div>
            </div>
        

        <?php endif ?>

        <img src="assets/img/ellisse.svg" id="ellisse"></img>
        <img src="assets/img/ellissePiccola.svg" id="ellissePiccola"></img>
        <img src="assets/img/vettorechiaro.svg" id="vettorechiaro"></img>
        <img src="assets/img/vettoreScuro.svg" id="vettorescuro"></img>
        <img src="assets/img/vettoreBianco.svg" id="vettoreBianco"></img>
        <img src="assets/img/razzo.svg" id="razzo"></img>
    </section>
</body>

</html>