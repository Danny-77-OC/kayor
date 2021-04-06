<?php $title = "Kaylor Import"; ?>

<?php ob_start(); ?>

<div class="container">

  <h1>Bienvenu chez nous !</h1>

  <div class="separate position-relative mt-5 mb-5">
    <hr class="w-25 bg-dark ">
    <i class="fas fa-globe-africa"></i>
  </div>


  <section class="caroussel">

    <div id="carouselExampleCaptions" class="carousel slide  m-auto" data-ride="carousel" style="width:70%">

      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="image/piment.jpeg" class="d-block w-100 h-80 img-thumbnail bg-warning" alt="image_de_piment">
          <div class="carousel-caption d-none d-md-block">
            <h2>besoin de produits exotiques ?</h2>
            <p>kaylor import vous approvisionne en produits frais</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/ananas.jpeg" class="d-block w-100 img-thumbnail bg-warning" alt="image_ananas">
          <div class="carousel-caption d-none d-md-block">
            <h2>Originaires du Senegal et du Malie</h2>
            <p>nos fruits et légumes sont réputés pour leur qualité et leur prix</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/gombo.jpeg" class="d-block w-100 img-thumbnail bg-warning" alt="image_de_gombo">
          <div class="carousel-caption d-none d-md-block">
            <h2>Consulter nos offres et faites votre choix</h2>
            <p>Pour commander vous devez d'abord vous inscrire puis vous connecter</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="image/aubergine.jpeg" class="d-block w-100 img-thumbnail bg-warning" alt="image_aubergine">
          <div class="carousel-caption d-none d-md-block">_
            <h2>Nous contacter ?</h2>
            <p>nos coordoonnées se situe en pied de page</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/mangue.jpeg" class="d-block w-100 img-thumbnail bg-warning" alt="image_de_mangue">
          <div class="carousel-caption d-none d-md-block">
            <h2>Bonne visite...</h2>

          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <div class="row position-relative mb-5">
      <i class="fas fa-play col-1 text-warning" id="btnPlay"></i>
      <i class="fas fa-pause col-1 text-warning" id="btnStop"></i>
    </div>
  </section>

  <div class="separate position-relative mt-5 mb-5">
    <hr class="w-25 bg-dark ">
    <i class="fas fa-globe-africa"></i>
  </div>

  <section class="mt-5">

    <h2>Qui somme nous ?</h2>
    <p>Implantée en région parisienne, Kayor-Import est une fenêtre sur le monde. Spécialiste de l'import-export,
      notre société vous offre une multitude de produits éxotiques : gombo, aubergine, piment, patate-douce, ananas, mangue.
      Avec des partenaires comme <strong>SCL</strong> et <strong>AGROBIZ</strong>, principaux fournisseurs de fruits et légumes en afrique de l'ouest
      notre objectif est de vous fournir des produits éxotiques certifiés qualité et toujours au meilleur prix du marché. Avec 2 zones d'approvisionnement
      au marché international de Rungis et au marché de Courneuve nous fournissant la France mais également l'europe.
    </p>
  </section>

  <div class="separate position-relative mt-5 mb-5">
    <hr class="w-25 bg-dark ">
    <i class="fas fa-globe-africa"></i>
  </div>

  <section>
    <h2>Ou nous trouver ?</h2>
    <div id="myMap">

    </div>
  </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>