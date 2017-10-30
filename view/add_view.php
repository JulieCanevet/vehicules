<section class="add">
    <div class="container col-12 col-sm-6 col-md-6">
        <div class="form-wrap">
        	<h1>Ajouter un véhicule</h1>
            <form method="post" action="index.php">
                <div class="form-group">
                    <select name='type'>
				        <option value="moto">Moto</option>
				        <option value="truck">Camion</option>
				        <option value="car">Voiture</option>
      				</select>
                </div>
                <div class="form-group">
                    <input type="text" name="color" class="form-control" placeholder="Couleur">
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Prix">
                </div>
                <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Ajouter" name="add">
            </form>
            <hr>
        </div>
    </div> <!-- /.container -->
          <a href="index.php">Retour</a>

</section>