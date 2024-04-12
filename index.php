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

    <title>PHP Badwords</title>
</head>

<style>
    .container {
        .row {

            &>div {
                border: 2px solid black;

                span {
                    font-weight: bold;
                    font-size: 1.3rem;
                }

                &:last-child {
                    background-color: red;
                }
            }
        }
    }
</style>

<body>
    <section>
        <div class="container">
            <h1 class="text-center">badWords</h1>
            <div class="row d-flex align-items-center row-cols-2 my-4">
                <div class="col1">
                    <span>Il paragrafo ricevuto è:</span> <?php echo trim($paragrafo) ?>. <br>
                    <span>La sua lunghezza è: <?php echo strlen(trim($paragrafo)) ?></span>
                </div>
                <div class="col1">
                    <span>Il paragrafo ricevuto è:</span> <?php echo str_replace(trim($parola), '***', trim($paragrafo)); ?>. <br>
                    <span>La sua lunghezza è: <?php echo strlen(trim($paragrafo)) ?></span>
                </div>
                <div class="col2">
                    <span>Parola censurata:</span> <?php echo trim($parola) ?>
                </div>
            </div>
            <div class="container">
                <button class="btn btn-primary">
                    <a class=" text-white text-decoration-none" href="form-post.php">Vai al form</a>
                </button>
            </div>
        </div>
    </section>
</body>

</html>