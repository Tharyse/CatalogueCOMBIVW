<?php require 'gabarit.php' ?>
<<<<<<< HEAD

=======
>>>>>>> cdfb9acd4d85a525413ff62e0e6b24fe9d07b4e0
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>The Combi Brazil</title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div class="jumbotron">
      <h2 class="titre">The Combi Brazil</h2>  
    <div class="Iam">
  <p>Vous cherchez</p><b>
  <div class="innerIam">
    Un combi<br /> 
    Une pièce<br />
    Un conseil
  </div>
  </b>
  </div>
    <br />
    <a href="Vue/vueCatalogue.php" target="_blank"> <button type="button" class="btn btn-warning">Catalogue</button></a>

    </p>
  </div>
  <h2> Qui somme nous ?</h2>
  <div id="contenu">
    <?= $contenu ?>   <!-- Élément spécifique -->
  </div>
  </body>
</html>
