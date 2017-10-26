<section class="edit">
    <div class="container col-12 col-sm-6 col-md-6 col-lg-2">
        <div class="form-wrap">
        	<h1>Modifier le véhicule</h1>
            <form method="post" action="index.php">
                <div class="form-group">
                    <select name='newType'>
				        <option value="moto">Moto</option>
				        <option value="truck">Camion</option>
				        <option value="car">Voiture</option>
      				</select>
                </div>
                <div class="form-group">
                    <input type="text" name="newColor" class="form-control" placeholder="Couleur">
                </div>
                <div class="form-group">
                    <input type="text" name="newPrice" class="form-control" placeholder="Prix">
                </div>
                    <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                    <button type="submit">Modifier</button>
            </form>
            <hr>
        </div>
    </div> <!-- /.container -->
</section>