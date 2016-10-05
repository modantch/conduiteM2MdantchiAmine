
</body>
</html>

<?php

include "connexion_bd.php";

$r = "SELECT * FROM atelier ";
$data = $connexion->query($r );
$b=$data->fetchAll();

?>

<table width="800" border="2" cellspacing="0" cellpadding="5" align="center" >
    <tr>
        <td>Identifiant atelier</td>
        <td> Titre atelier </td>
        <td>Theme</td>
        <td>Type</td>
        <td>Langue</td>
        <td>Niveau</td>
        <td>Capacité d'aceuil</td>
        <td>Adresse</td>
        <td>Durèe</td>


    </tr>
    <?php


    foreach ($b  as $result){ ?>
        <tr>
            <td><?php echo $result['id_atelier']; ?></td>
            <td><?php echo $result['titre_atelier']; ?></td>
            <td><?php echo $result['theme']; ?></td>
            <td><?php echo $result['type']; ?></td>
            <td><?php echo $result['langue']; ?></td>
            <td><?php echo $result['Niveau']; ?></td>
            <td><?php echo $result['capacité_accueil']; ?></td>
            <td><?php echo $result['Adresse']; ?></td>
            <td><?php echo $result['durée']; ?></td>

        </tr>
        <?php


    }

    ?>
</table>


