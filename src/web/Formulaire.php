<!DOCTYPE html>
<html>



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" media="screen" type="text/css" title="Accueil" href="style/inscription.css" />
    <title>Ajout Atelier</title>

<body>
<form id="form1" name="form1" method="post" action="AjouterAtelier.php  ">


    <div align="center">
        <p>&nbsp;</p>
        <h1 align="center" id="pgtitle"> ----------------- </h1>

            <table width="500" border="0" align="center" bordercolor="#0066FF" bgcolor="#3399CC">
                <tr>
                     <div align="center" class="Style1">Vouillez introduire les informations </div>
                </tr>
                <tr>

                </tr>
                <td><div align="left">Titre atelier :

                        <input name="titre" value="" type="texte" id="Titre" size="40" />
                    </div></td>

                <td>Theme:
                    <input name="Theme" type="texte" id="Theme" size="40" /></td>

                <tr>
                    <td>Type :
                        <input name="Type" type="texte" id="Type" value="exemple 11@......" size="40" maxlength="40" /></td>
                    <td>Langue :
                        <input name="Langue" type="text"  id="Langue" size="40" maxlength="16" /></td>
                </tr>




                <tr>
                <td height="39">Niveau:
                    <input name="Niveau" type="text" size="40" />

                    <td>Duree :

                        <label for="textarea">
                            <input name="Duree" type="text" id="textarea" value="       " size="40" />
                        </label></td>
            </tr>
            <tr>
                <td height="39">Capacité d'aceuil:
                    <input name="Capacité" type="text" id="textfield5" size="40" maxlength="160" /></td>
                <td>Adresse :

                    <label for="textarea">
                        <input name="Adresse" type="text" id="textarea" value="       " size="40" />
                    </label></td>
            </tr>

            <tr>
                  <div align="center">

                        <label>
                    <input value="Enregistrer" name="submit " type="submit"   align="center"   >
                         </label>
                    </div>
            </tr>

</form>
</table>
</div>

</body>
</html>
