<?php include('server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edusogno</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
    <header></header>

    <section id="container">
        <?php if (isset($_SESSION['success'])): ?>
        
            <!-- TODO: inserire nome -->
            <div>
                <div class="containerEventi">
                    <h2>Ciao ecco i tuoi eventi</h2>
                    <div id="eventi">

                        <?php if (count($eventiUtente) > 0): ?>
                        <?php foreach ($eventiUtente as $evento): ?>
                        
                            <div class="evento">
                                <div>
                                    <?= $evento['nome_evento'] ?>
                                </div>
                                <p>
                                    <?= $evento['data_evento'] ?>
                                </p>
                                <button name="join" class="button">JOIN</button>
                            </div>
                        
                        <?php endforeach; ?>
                        <?php else: ?>
                        <h3>Non hai eventi</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        
        <?php endif ?>

    </section>
</body>

</html>