<?php
#Avvio SESSION
session_start();

//Vedo che ho dentro
#var_dump($_SESSION);

#PPrendo i valori che mi servono per la stampa
$message = ($_SESSION['message']);
$email = ($_SESSION['email']);

include_once __DIR__ .'/layouts/head.php';
?>

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