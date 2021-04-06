<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<?php 

session_start();

session_destroy();

?> 

<p class="text-center border  border-warning rounded-lg pl-1 pr-1 bg-warning">Merci de votre Visite et à très bientot</p> 



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>