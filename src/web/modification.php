<html>
  <head>
    <title>modification d'un atelier</title>
  </head>
<body>

  <?php
try
{
  $connexion = new PDO('mysql:host=localhost;dbname=bd;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


  $id  = 1;//$_GET["id"] ;
  
 
  $requete = $connexion->query("SELECT *
            FROM Atelier
      WHERE id_Atelier = '$id'")  ;

  //affichage des données:
  if ($result = $requete->fetch())
  
  {
  ?>

  <form name="insertion" action="modificationSave.php" method="POST">
    <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>Titre_atelier</td>
      <td><input type="text" name="Titre_atelier" value="<?php echo $result['Titre_atelier'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>theme</td>
      <td><input type="text" name="theme" value="<?php echo $result['theme'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>type</td>
      <td><input type="text" name="type" value="<?php echo $result['type'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>langue</td>
      <td><input type="text" name="langue" value="<?php echo $result['langue'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>Niveau</td>
      <td><input type="text" name="Niveau" value="<?php echo $result['Niveau'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>Capacité_accueil</td>
      <td><input type="text" name="Capacité_accueil" value="<?php echo $result['Capacité_accueil'] ;?>"></td>
    </tr>
     <tr align="center">
      <td>Adresse</td>
      <td><input type="text" name="Adresse" value="<?php echo $result['Adresse'] ;?>"></td>
    </tr>
     <tr align="center">
      <td>durée</td>
      <td><input type="text" name="durée" value="<?php echo $result['durée'] ;?>"></td>
    </tr>

    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>


<?php
  }
  connexion.closeCursor();
  ?>


  </body>
</html>