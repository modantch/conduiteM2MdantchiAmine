<html>
<body>



<?php

include "connexion_bd.php";
include "Formulaire.php";

if (isset($_POST["titre"] ))
{
    $t=$_POST["titre"];

}
if (isset($_POST["Theme"] ))
{
    $Theme=$_POST["Theme"];

}
if (isset($_POST["Type"] ))
{
    $Type=$_POST["Type"];

}
if (isset($_POST["Niveau"] ))
{
    $Niveau=$_POST["Niveau"];

}
if (isset($_POST["Langue"] ))
{
    $Langue=$_POST["Langue"];

}
if (isset($_POST["Duree"] ))
{
    $Duree=$_POST["Duree"];

}
if (isset($_POST["Capacité"] ))
{
    $Capacité=$_POST["Capacité"];

}
if (isset($_POST["Adresse"] )) {
    $Adresse = $_POST["Adresse"];
}



$ma_requete = "INSERT INTO `atelier` (`id_atelier`, `titre_atelier`, `theme`, `type`, `langue`, `Niveau`, `capacité_accueil`, `Adresse`, `durée`) VALUES (NULL, '$t', '$Theme', '$Type', '$Langue', '$Niveau', '$Capacité', '$Adresse ', '$Duree')";
 $connexion->query($ma_requete );

if($connexion->query($ma_requete)== true)
{
    echo("Atelier ajouter ") ;
}
else
{
    echo("Atelier non ajouter") ;
}

?>


</body>
</html>

 


