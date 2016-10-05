<?php
include "connexion_bd.php";
$id  = $_GET['id'] ;


 $requete = $connexion->query("DELETE 
            FROM atelier
      WHERE id_atelier = '$id'" ) ;



if($requete)
  {
    echo("La suppression a été correctement effectuée") ;
    include "Aceuil.php";

  }
  else
  {
    echo("La suppression a échoué") ;
    include "modification.php";

  }

?>