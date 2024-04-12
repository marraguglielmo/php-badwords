<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <link rel="stylesheet" href="css/style.css">
    <title>Form Post</title>
</head>

<body class="body-2">

    <section>
        <div class="container">
            <div class="row w-25 m-auto">
                <h1 class="text-center my-4">Form</h1>
                <div class="col">
                    <form action="index.php" method="post">
                        <!-- textarea -->
                        <div>
                            <label class="form-label">Paragrafo</label>
                            <textarea name="paragrafo" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <!-- parola -->
                        <div class="mt-3">
                            <label class="form-label">Parola da censurare</label>
                            <input name="parola" type="text" placeholder="Scrivi una parola" class="form-control">
                        </div>
                        <!-- bottoni -->
                        <div class="buttons my-4">
                            <button type="submit" class="btn">Invia</button>

                            <button class="btn">
                                <a href="index.php" class="text-decoration-none text-black">Torna indietro</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>