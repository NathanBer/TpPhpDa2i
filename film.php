<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 14/11/17
 * Time: 08:40
 */
require_once "connexion.php";
require_once "getblock.php";

$id=$_GET['idfilm'];
$requete="SELECT * FROM Film WHERE IDF='".$id."'";
$reply = mysqli_query($link, $requete);
$tuples = mysqli_fetch_assoc($reply);
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php
            getBlock('header.php', $tuples['Titre']);
        ?>
    </head>
    <body>
        <div id="conteneur">
            <header>
                <nav>
                    <a href="index.html">Index</a>
                </nav>
            </header>
            <div>
                <?php
                    getBlock('titre.php', $tuples['Titre']);
                ?>
            </div>
        </div>
    </body>
</html>

