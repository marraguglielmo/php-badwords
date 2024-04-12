<?php
$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <link rel="stylesheet" href="css/style.css">
    <title>Badwords 2.0</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<body class="body-1">

    <div class="container">
        <h1 class="text-center text-white my-3">BadWords</h1>
    </div>

    <div class="container">
        <div class="row row-cols-2 mt-5">
            <div class="col">
                <h4>
                    <p>Il paragrafo ricevuto è:</p> <?php echo trim($paragrafo) ?>
                </h4>
                <h3 class="mt-5 text-decoration-underline">La lunghezza è: <?php echo strlen(trim($paragrafo)) ?></h3>
            </div>
            <div class="col">
                <h4>
                    <p>Il paragrafo censurato è:</p> <?php echo str_replace($parola, '***', $paragrafo); ?>
                </h4>
                <h3 class="mt-5 text-decoration-underline">La lunghezza è: <?php echo strlen(trim($paragrafo)) ?></h3>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>La parola censurata è:</h3>
                <h4 class="cens"><?php echo trim($parola) ?></h4>
            </div>
        </div>
        <div class="container text-center">
            <button class="btn my-4 ">
                <a href="form-post.php" class="text-decoration-none">Compila il form</a>
            </button>
        </div>
    </div>

</body>

</html>