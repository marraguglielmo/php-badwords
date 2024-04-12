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
    /* textarea {
        width: 50% !important;
    } */
</style>

<body>

    <div class="container py-5">
        <div class="row w-50 m-auto">
            <form action="index.php" method="post">

                <div class="mb-3">
                    <label class="form-label">Paragrafo</label>
                    <textarea name="paragrafo" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Parola</label>
                    <input name="parola" type="text" class="form-control" placeholder="Scrivi una parola">
                </div>


                <button type="submit" class="btn btn-primary w-25 m-auto">Invia</button>
            </form>
        </div>
    </div>

</body>

</html>