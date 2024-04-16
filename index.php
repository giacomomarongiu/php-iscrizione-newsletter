<?php
#$prova = "Questa è una prova";

//Vedo che prende Get
#var_dump($_GET);
#var_dump(isset($_GET['email']));

//Per comodità assegno alla variabile mail quello che prendo in input
$email = $_GET['email'];

//Se mail è ok != null
if (isset($email)) {

    // Verifico se prende il valore
    #var_dump($email);


    $message = mailChecker($email);

}
/**
 * Prende in input una stringa e ti dice se la stringa inserita ha i requisiti minimi di una mail o meno
 * @param string
 */
function mailChecker($mail)
{
    // Verifico che abbia i requisiti indispensabili di una mail @ e .
    if (str_contains($mail, '@') && str_contains($mail, '.')) {
        //Se ok
        return "La tua mail è stata accettata";
    } else {
        //Non va
        return "Qualcosa non va";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3a46370e2f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Php - Badwords</title>
</head>

<body>

    <!--Navbar-->
    <header class="mb-3">
        <nav class="navbar bg-primary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    Newsletter <i class="fa-solid fa-poop"></i>
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <!-- Form -->
        <form action="" method="get">

            <div class="m-auto">
                <label class="form-label" for="email">Inserisci una mail</label>
                <!--name="badword(variabile)"-->
                <input class="form-control" type="text" placeholder="example@boolean.com" name="email">
            </div>
            <!-- Button submit -->
            <button type="submit" class="btn btn-primary mt-1">Invia</button>
        </form>
        <div class="mt-1 alert bg-primary text-center">
            <?php echo $message ?>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>