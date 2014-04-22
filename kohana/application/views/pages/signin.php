<?php
    include (APPPATH.'views/partials/header.php');
    include (APPPATH.'views/partials/navbar.php');

if (isset($_POST["login"]) && isset($_POST["password"]))
{

	$default = Database::instance();
	$result=$default->query(Database::SELECT,'SELECT * FROM visiteur WHERE login='.$_POST["login"].' AND password='.md5($_POST["password"]) );
	$user = $result->as_array('ID');
	$view->set('user', $user);

    if (if($result->rowCount() > 0){
		$_SESSION['Auth'] = $result->fetch();
		alert('Vous êtes maintenant connecté');
		header('Location:' . url::base());
		die();
	}
    {
        header ("Location: index.php?a=login")   ;
        break;
    }
    else
    {
        alert("Informations éronées");
    }
}
?>






    <body>
        <div class="container" style="width:350px;">
			<form class="form-signin" role="form" method="POST" action="<?= url::base();?>index.php/login">
				<h2 class="form-signin-heading">Connectez-vous</h2>
				<input id="login" type="text" class="form-control" placeholder="Identifiant" required autofocus>
				<input id="password" type="password" class="form-control" placeholder="Mot de passe" required>
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
			</form>
    	</div> <!-- /container -->
    </body>


<?php
    include (APPPATH.'views/partials/footer.php');
?>