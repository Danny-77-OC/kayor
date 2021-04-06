<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div class="container">

<h1 class="text-center mb-5"> Liste des commandes :</h1>

<?php
while ($dataCmd =  $showCommand->fetch()) {
?>



        <table class="table">

       
     

            <tbody>

            <div class="border border-warning rounded-lg pl-1 pr-1 bg-warning ">
                
                    <strong>Id de la commande : </strong><?= $dataCmd['idCommand']; ?><br>
                    <strong>Nom : </strong><?= $dataCmd['nameCustomer']; ?><br>
                    <strong>Tel : </strong><?= $dataCmd['telCustomer']; ?><br>
                    <strong>Email : </strong><?= $dataCmd['mailCustomer']; ?><br>
                    <strong>rue : </strong><?= $dataCmd['nameStreet']; ?><br>
                    <strong>Code-postal : </strong><?= $dataCmd['postalCode']; ?><br>
                    <strong>ville : </strong><?= $dataCmd['city']; ?><br>
                    <strong>Pays : </strong><?= $dataCmd['country']; ?><br>
                    <strong>Gombo : </strong><strong class="text-white"><?= $dataCmd['gombo']; ?></strong><br>
                    <strong>Piment : </strong><strong class="text-white"><?= $dataCmd['piment']; ?></strong><br>
                    <strong>Ananas : </strong><strong class="text-white"><?= $dataCmd['ananas']; ?></strong><br>
                    <strong>Aubergine : </strong><strong class="text-white"><?= $dataCmd['aubergine']; ?></strong><br>
                    <strong>Mangue : </strong><strong class="text-white"><?= $dataCmd['mangue']; ?></strong><br>
                    <strong>Détail de la commande : </strong><?= $dataCmd['détail']; ?><br>
                    <strong>Date de la commande : </strong><?= $dataCmd['dateCommand']; ?><br>

                    </div>

                <button class="border rounded-lg"><a href="index.php?action=deleteCmd&idCmd=<?= $dataCmd['idCommand']; ?>">Supprimer la commande</a></button>


            </tbody>

       


        </table>

    


<?php
}
?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>