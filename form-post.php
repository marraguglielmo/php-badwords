<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <title>Form-post</title>
</head>

<style>
    textarea {
        width: 50% !important;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="post">

                    <div>
                        <label class="form-label">Paragrafo</label>
                        <textarea name="paragrafo" cols="20" rows="4" class="form-control"></textarea>
                    </div>
            </div>
            <div class="col">

                <div>
                    <label class="form-label">Parola</label>
                    <input name="parola" type="text" placeholder="Scrivi una parola">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>

</body>

</html>