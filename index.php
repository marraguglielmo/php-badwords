<?php

$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

var_dump($paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <title>PHP Badwords</title>
</head>

<style>
    .container {
        .row {
            height: 100px;
        }
    }
</style>

<body>
    <section>
        <div class="container">
            <h1 class="text-center">badWords</h1>
            <div class="row d-flex align-items-center row-cols-2">
                <div class="col1">
                    Il paragrafo ricevuto è: <?php echo $paragrafo ?>
                </div>
                <div class="col2">
                    Parola censurata: <?php echo $parola ?>
                </div>
            </div>
            <div class="container">
                <button>
                    <a href="form-post.php">Vai al form</a>
                </button>
            </div>
        </div>
    </section>
</body>

</html>