<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vehicules</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href = "font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <button type="submit" name="plus" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <a href="index.php">Retour</a>

        <div class="card">
          <h3><?php echo $vue['type'] ?></h3>
          <h6 class="body">Couleur : <?php echo $vue['color'] ?></h6>
          <h6 class="body">Prix : <?php echo $vue['price'] ?>€</h6>
          <p class="body">Nombre de roues : <?php echo $vue['wheelsNb'] ?></p>

          <div class="footer">
            <a href="detail.php?id=<?php echo $vue['id']?>" class="card-link">Voir</a>
            <form class="card-button" id="edit" method="POST" action="index.php">
              <input type="hidden" name="id" value="<?php echo $vue['id']?>">
              <button type="submit" name="edit">Modifier</button>
            </form>
            <form class="card-button delete" method="POST" action="index.php">
              <input type="hidden" name="id" value="<?php echo $value['id']?>"/>
              <input type="submit" id="suppr" name="delete" onclick="if(!confirm('Etes-vous sur de vouloir supprimer ce véhicule ?')) return false;" value="Supprimer"/>
            </form>
          </div>
        </div>

<!-- End -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>


     <!-- Tether -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


      <!-- Popper -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

      <!-- Latest compiled and minified Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

      <!-- Initialize Bootstrap functionality -->
       <script>
       // Initialize tooltip component
       $(function () {
         $('[data-toggle="tooltip"]').tooltip()
       })

      // Initialize popover component
       $(function () {
         $('[data-toggle="popover"]').popover()
       })
       </script>
       <script src="js/js/bootstrap.min.js"></script>
    </body>
</html>