<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div class="container">
	<div class="row">
<div class="col">
                <h2 class="row justify-content-center">Se connecter :</h2>
<form method="post" action="index.php?action=validConnexion" enctype="multipart/form-data">
<div class="form-group mt-5">	
	<label>nom ou raison sociale</label><br>
    <input type="text" name="nameCo" class="form-control border-dark" id="psdCo"><br><br>
    
    <label>mot de passe</label><br>
	<input type="password" name="mdpCo" class="form-control border-dark" id="mdpCo"><br><br>
	
	

	<input type="submit" value="se connecter" class="btn btn-outline-dark" id="valid">
	</div>
</div>
</form>
	</div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>