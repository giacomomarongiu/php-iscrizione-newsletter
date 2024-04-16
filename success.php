<?php
session_start();
#var_dump($_SESSION);
$message = ($_SESSION['message']);
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
                    Good Job! - Newsletter <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <!-- Form -->

        <div id="liveAlertPlaceholder">
            <div class="mt-1 alert text-center <?php echo $message["class"] ?>">
                <?php echo $message["text"] ?>
            </div>
        </div>


    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>