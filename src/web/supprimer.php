<?php
try
{
  $connexion = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
} 
 
$id  = $_GET['id'] ;


 $requete = $connexion->query("DELETE 
            FROM Atelier
      WHERE id_Atelier = '$id'" ) ;



if($requete)
  {
    echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("La suppression à échouée") ;
  }

?>