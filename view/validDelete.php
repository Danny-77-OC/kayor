<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div class="container">



<p class="border border-warning rounded-lg pl-1 pr-1 bg-warning text-center"> La commande n°<?= $_GET['idCmd']; ?> a bien été supprimée</p>



</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>