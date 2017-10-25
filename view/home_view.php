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
        <link rel = "stylesheet" href = "font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <form id="plus" method="POST" action="index.php">
        <button type="submit" name="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </form>
<?php
if(isset($vehicules)){
    foreach ($vehicules as $key => $value) {
?>
<div class="card container col-6">
  <div class="card-block">
    <h4 class="card-title"><?php echo $value['type'] ?></h4>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['color'] ?></h6>
    <p class="card-text"><?php echo $value['price'] ?></p>
    <a href="#" class="card-link">Voir</a>
    <a href="#" class="card-link">Modifier</a>
    <a href="#" class="card-link">Supprimer</a>
  </div>
</div>
    <?php }} ?>
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