<?php
session_start();
#var_dump($_SESSION);
$message = ($_SESSION['message']);

include_once __DIR__ . '/layouts/head.php';
?>




    <div class="container">

    <!--Alert-->
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