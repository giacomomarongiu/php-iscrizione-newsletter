<?php
#Avvio SESSION
session_start();

//Vedo che ho dentro
#var_dump($_SESSION);

#PPrendo i valori che mi servono per la stampa
$message = ($_SESSION['message']);
$email = ($_SESSION['email']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3a46370e2f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>

<body>

    <!--Navbar-->
    <header class="mb-3">
        <nav class="navbar bg-primary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="">
                    Newsletter <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <!-- Form -->
        <form action="server.php" method="get">

            <div class="m-auto">
                <label class="form-label" for="email">Inserisci una mail:</label>
                <!--Assegno all'input il valore di $email in modo da recuperare il valore nel caso fosse no valido-->
                <input class="form-control" type="text" placeholder="example@boolean.com" name="email"
                    value="<?php echo $email ?>">
            </div>

            <!-- Button submit -->
            <button type="submit" class="btn btn-primary mt-1" id="liveAlertBtn">Send</button>
            <div id="liveAlertPlaceholder">
                <!--Inserisco "dinamicamente" la classe fornita dall'array dinamico-->
                <div class="mt-1 alert text-center <?php echo $message["class"] ?>">
                    <!--Inserisco "dinamicamente" la stringa fornita dall'array dinamico-->
                    <?php echo $message["text"] ?>
                </div>
            </div>
        </form>

    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>