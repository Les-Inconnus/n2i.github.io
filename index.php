<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Accueil sauveteurs de Dunkerque</title>
</head>

<header>
<nav class="navbar">
<a href="">Sauveteurs de Dunkerque</a>
<a href="" style="float:right;">Login</a>
</nav>
</header>

<body>

<?php 
if(isset($_GET['onglet'])){
    switch($_GET['onglet']){
        }
}else{ ?>

    <form action="" method="post" class="formulaire" name="formulaire_recherche">
    <h1>Rechercher une nouvelle <em>histoire<em></h3>
    <input type="text" class="barre_recherche" name="texte" placeholder="Sauveteur,sauvetage,sauvé...">
    <button type="submit" class="btn btn-primary">Rechercher</button>

    </form>
    <?php

    if(isset($_POST['texte'])){
       ?>
        <div class="card mb-3" style="width:60%;height:150px;margin-left:20%;margin-top:15px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body">
     <a href=""><button type="button" style="margin-top:15%;" class="btn btn-primary">Rechercher</button></a>  
      </div>
    </div>
    
  </div>
</div>
        <?php
   }
}
?>
    
</body>
<footer>


</footer>
</html>