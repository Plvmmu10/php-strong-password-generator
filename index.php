<?php
include './partials/function.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PSW Generator</title>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Inserisci la lunghezza della tua password</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" class="d-flex flex-column align-items-center">
            <input type="number" name="pswLength" id="pswLength">

            <button class="btn btn-danger my-2">
                Invia
            </button>
        </form>

        <h2>
            La tua nuova password è:
            <?php echo $newPassword ?>
        </h2>



    </div>

</body>

</html>