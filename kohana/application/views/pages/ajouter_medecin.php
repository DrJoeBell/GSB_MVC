<?php
    include (APPPATH.'views/partials/header.php');
    include (APPPATH.'views/partials/navbar.php');
    if (isset($medecin)) {
        var_dump($medecin);
    }
?>

    <body>
        <div class="container">
         <form role="form" action="#" method="POST">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
          </div>
        <div class="form-group">
            <label for="nom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="nom">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
        </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
    </body>


<?php
    include (APPPATH.'views/partials/footer.php');
?>