<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<h1 class="border  border-warning rounded-lg pl-1 pr-1 bg-warning">Bienvenu <?= $_SESSION['pseudo'];?></h1>

<?php  print_r($passCheck)  ?>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>