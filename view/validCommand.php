<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<p class=" text-center">Votre commande à bien été prise en compte !</p>



<div class="container">


<p class="border border-warning rounded-lg pl-1 pr-1">commande n°<?=$theCmd['idCommand']; ?> au nom de <?=   $theCmd['nameCustomer']; ?> domicilié au <?=   $theCmd['nameStreet']; ?> <?=   $theCmd['postalCode']; ?> <?=   $theCmd['city']; ?> en <?=   $theCmd['country']; ?> et au n°de téléphone: <?=   $theCmd['telCustomer']; ?> a commandé <?=   $theCmd['détail']; ?> </p>


</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>