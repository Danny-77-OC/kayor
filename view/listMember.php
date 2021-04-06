<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div class="container">

<h1 class="text-center mb-5"> Liste des inscrits :</h1>



<?php
while ($Cstdata =  $showCst->fetch()) {
?>


<table class="table">

<tbody>
                
                <div class="border border-warning rounded-lg pl-1 pr-1 bg-warning ">

                

                    <strong>NOM : </strong><?= $Cstdata['nameCustomer']; ?><br>
                    
                    <strong>EMAIL : </strong><?= $Cstdata['mailCustomer']; ?>
                   
                    </div>


                
            </tbody>


</table>



<?php
}
?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>