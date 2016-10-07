<?php
include "connexion_bd.php";

 

  $titre     = $_POST["titre_atelier"] ;
  $theme = $_POST["theme"] ;
  $type = $_POST["type"] ;
-  $langue        = $_POST["langue"] ;
  $Niveau        = $_POST["Niveau"] ; 
  $Capacité_accueil         = $_POST["capacité_accueil"] ;
   $Adresse         = $_POST["Adresse"] ;
    $durée         = $_POST["durée"] ;
      $id         = $_POST["id"] ;


 
  //exécution de la requête SQL:


  $requete = $connexion->query("UPDATE atelier
    SET titre_atelier         = '$titre',
      theme     = '$theme',
      type    = '$type',
      langue           = '$langue',
      Niveau = '$Niveau',
      capacité_accueil         = '$Capacité_accueil' ,
      Adresse = '$Adresse',
      durée = '$durée'
           WHERE id_atelier='$id'" ) ;

 
  if($requete== true)
  {
    echo("La modification a été correctement effectué") ;
      include "retourAcueil.php";


 
  }

  else
  {
      include "retourAcueil.php";
      echo("La modification  a échoué") ;

  }

?>