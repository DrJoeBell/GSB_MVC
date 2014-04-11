<?php
    include (APPPATH.'views/partials/header.php');
    include (APPPATH.'views/partials/navbar.php');
?>

    <body>
        <div class="container">
            <h1><?php echo $message; ?></h1>
            <p>We just wanted to say it! :)</p>
            <br><br>
            <?php echo $valentin; ?>

        </div>
    </body>


<?php
    include (APPPATH.'views/partials/footer.php');
?>