<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Accueil sauveteurs de Dunkerque</title>
</head>
<header>
<nav class="navbar">
<a href="">Sauveteurs de Dunkerque</a>
<a href="" style="float:right;">Login</a>
</nav>
</header>
<body>

<style>
.navbar{
    display: inline-block;
    height: 50px;
    width: 100%;
    padding: 20px;
}
.formulaire{
margin-top: 13em;
text-align: center;
}
.barre_recherche{
    width: 50%;
border-radius: 15px;
height: 50px;
box-shadow: 2px 2px 2px;
}
a{
    color: black;
    text-decoration: none;
}
</style>

<?php 
if(isset($_GET['onglet'])){
    switch($_GET['onglet']){
        }
}else{ ?>

    <form action="" method="post" class="formulaire" name="formulaire_recherche">
    <h1>Rechercher une nouvelle <em>histoire<em></h3>
    <input type="text" class="barre_recherche" placeholder="Sauveteur,sauvetage,sauvé...">
    <i class="bi bi-search"></i>
    </form>


<?php
}





?>
    
</body>
<footer>


</footer>
</html>