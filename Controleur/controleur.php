<?php

require 'Modele/modele.php';

// Affiche la liste de tous les produits du site
function accueil() {
  require 'Vue/vueAccueil.php';
}

function catalogue() {
  $produits = getProduits();
  
  require 'Vue/vueCatalogue.php';
}

// Affiche les détails sur un produit
function produit($idProduit) {
  $produit = getProduit($idProduit);

  require 'Vue/vueProduit.php';
}

// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}