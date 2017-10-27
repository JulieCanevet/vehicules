<section class="edit">
    <div class="container col-12 col-sm-6 col-md-6">
        <div class="form-wrap">
        	<h1>Modifier le véhicule</h1>
            <form method="post" action="index.php">
                <div class="form-group">
                    <select name='newType'>
                        <option value="<?php echo $selectvalue['type'];?>" style="display:none;" selected><?php echo $selectvalue['type'];?></option>
				        <option value="moto">Moto</option>
				        <option value="truck">Camion</option>
				        <option value="car">Voiture</option>
      				</select>
                </div>
                <div class="form-group">
                    <input type="text" name="newColor" class="form-control" value="<?php echo $selectvalue['color'];?>">
                </div>
                <div class="form-group">
                    <input type="text" name="newPrice" class="form-control" value="<?php echo $selectvalue['price'];?>">
                </div>
                    <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                    <button class="modifier" type="submit">Modifier</button>
            </form>
            <hr>
        </div>
    </div> <!-- /.container -->
</section>