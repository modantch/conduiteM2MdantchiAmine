
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" media="screen" type="text/css" title="Accueil" href="style/inscription.css" />
    <title>CNRS</title>

<body>
<form id="form1" name="form1" method="post" action="" >


    <div align="center">
        <p>&nbsp;</p>
        <h1 align="center" id="pgtitle">Cr&eacute;ez votre Atelier  </h1>

        <table width="800" border="2" align="center" bordercolor="image/img.jpg"  bgcolor="#3399CC">

            <form id="form1" name="form1" method="post" ">

                <p><input type="submit" name="bouton1" value="Ajouter Atelier" />&nbsp;
                    <input type="submit" name="bouton2" value="Afficher liste/modifier/suprimer  " />&nbsp;

            </form>
            <?php

            if (!empty($_POST)) {

                if (isset($_POST['bouton1'])) {
                    include 'Formulaire.php';
                    echo '<p> ';
                } elseif (isset($_POST['bouton2'])) {
                    include 'AfficherListe.php';
                    echo '<p>La liste des ateliers  ';
                }


            }

            ?>


</body>
</html>




