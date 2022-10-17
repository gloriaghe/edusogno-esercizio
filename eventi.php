<?php include('server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edusogno</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
    <section id="rectangle2">
        <div id="rectangle1">
            <?php if (isset($_SESSION['success'])): ?>
            <section id="eventi">
                <h2>Ciao
                    ecco i tuoi eventi
                </h2>
                <div>
                    <div class="containerEventi">
                        <?php if (count($eventiUtente) > 0): ?>
                        <?php foreach ($eventiUtente as $evento): ?>
                        <div class="">
                            <div class="evento">
                                <div><?= $evento['nome_evento'] ?></div>
                                <p><?= $evento['data_evento'] ?></p>
                                <div ><button name="join">JOIN</button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <h3>Non hai eventi</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endif ?>

        </div>
    </section>
</body>

</html>