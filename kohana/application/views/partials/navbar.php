<div class="bs-component">
  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= url::base();?>">GSB</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= url::base();?>">Accueil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?= url::base();?>index.php/login">Connexion</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Mon Compte <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="download">
            <li><a href="<?= url::base();?>index.php/monCompte/modifier">Modifier les infos</a></li>
            <li><a href="<?= url::base();?>index.php/logout">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<br>
<br>
<br>
