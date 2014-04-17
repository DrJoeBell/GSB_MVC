<?php
    include (APPPATH.'views/partials/header.php');
    include (APPPATH.'views/partials/navbar.php');
?>

    <body>
        <div class="container">
	        <form class="form-signin" style="margin-top: 15%;" method="POST" action="signin.php">
	            <h2 class="form-signin-heading">Connectez-vous</h2>
	            <input type="text" class="input-block-level" placeholder="Nom d'utilisateur" name="login" >
	            <input type="password" class="input-block-level" placeholder="Mot de passe" name="password" >
	            <button class="btn btn-large btn-primary" type="submit">Connexion</button>
	        </form>
    	</div> <!-- /container -->
    </body>


<?php
    include (APPPATH.'views/partials/footer.php');
?>