<?php
try
{
  $connexion = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
} 
 

 

  $titre     = $_POST["Titre_atelier"] ;
  $theme = $_POST["theme"] ;
  $type = $_POST["type"] ;
-  $langue        = $_POST["langue"] ;
  $Niveau        = $_POST["Niveau"] ; 
  $Capacité_accueil         = $_POST["id"] ;
   $Adresse         = $_POST["Adresse"] ;
    $durée         = $_POST["durée"] ;
      $id         = $_POST["id"] ;

 
  //création de la requête SQL:
  $sql = "UPDATE Atelier
            SET Titre_atelier         = '$titre', 
	          theme     = '$theme',
		  type    = '$type',
		  langue           = '$langue',
		  Niveau = '$Niveau',
      id = '$id',
      Adresse = '$Adresse',
      durée = '$durée'
           WHERE id_Atelier = '$id' " ;
 
  //exécution de la requête SQL:


  $requete = $connexion->query("UPDATE Atelier
            SET Titre_atelier         = '$titre',
          theme     = '$theme',
      type    = '$type',
      langue           = '$langue',
      Niveau = '$Niveau',
        Capacité_accueil         = 'Capacité_accueil' ,
      Adresse = '$Adresse',
      durée = '$durée'
           WHERE id_Atelier='$id'" ) ;


 
  if($requete)
  {
    echo("La modification a été correctement effectuée") ;
  }
  else
  {
    echo("La modification  a échouée") ;
  }

?>