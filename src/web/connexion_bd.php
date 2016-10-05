<?php



    try {
        $connexion = new PDO('mysql:host=localhost;dbname=bd_site;charset=utf8', 'root', '');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());}

?>