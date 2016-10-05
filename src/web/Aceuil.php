
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" media="screen" type="text/css" title="Accueil" href="style/inscription.css" />
    <title>CNRS</title>

<body>
<form id="form1" name="form1" method="post" >


    <div align="center">
        <p><img src="image/abstrait-bleu-trait.jpg " width="1300" height="200" /></p>
        <h1 align="center" id="pgtitle">Cr&eacute;ez votre Atelier  </h1>

        <table width="800" border="0" align="center" bordercolor="image/abstrait-bleu-trait.jpg"  bgcolor="#3399CC">

            <?php

            if (!empty($_POST)) {
                echo '<p>Le bouton enfoncé est le bouton ';
                if (isset($_POST['bouton2'])) {
                 include 'AfficherListe.php';
                } elseif (isset($_POST['bouton3'])) {
                    include 'AjouterAtelier.php';
                } else {
                    // par défaut, c'est le bouton 1, même si on ne clique pas/
                    echo '1';
                }
                echo '</p>';
                echo '<p>Le champ texte contient : ', $_POST['champ'], '</p>';
            }

            ?><form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <p><input type="text" name="champ" /></p>
                <p><input type="submit" name="bouton1" value="Ajouter Atelier" />&nbsp;
                    <input type="submit" name="bouton2" value="Afficher liste atelier" />&nbsp;
                    <input type="submit" name="bouton3" value="Le bouton 3" /></p>
            </form>
</body>
</html>




