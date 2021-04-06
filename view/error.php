<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div id="emptyField">
<p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">Veuillez remplir  les champs principaux avec plus de caractères</p>
<a href="index.php?action=errorInscription" class="text-warning">Retour à la page d'inscription</a>
</div>

<div id="emptyFieldCo">
<p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">Veuillez remplir  les champs principaux avec plus de caractères</p>
<a href="index.php?action=errorConnexion" class="text-warning">Retour à la page de connection</a>
</div>

<div id="psdError">
    <p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">ce nom ou raison social n'existe pas ou encore votre mot de passe est invalide !  veuillez réessayer ou aller vous inscrire dans la page d'inscription</p>
<a href="index.php?action=errorConnexion" class="text-warning">Retour à la page de connection</a>
    
</div>

<div id="nameError">
    <p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">ce nom ou raison sociale éxiste déjà ! Veuillez retaper ou essayer de nouveau </p>
<a href="index.php?action=errorInscription" class="text-warning">Retour à la page d'inscription</a>
    
</div>


<div id="coForCmd">
<p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">Veuillez vous connecter dabord avant d'effectuer votre commande et remplir les champs obligatoires</p>
<a href="index.php?action=errorCmd" class="text-warning">Retour à la page de connection</a>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>