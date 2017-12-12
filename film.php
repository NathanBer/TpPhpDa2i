<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 14/11/17
 * Time: 08:40
 */
require_once "connexion.php";
require_once "getblock.php";

if(isset($_GET['idfilm']))
{
    $requetetest="select IDFilm from Film Where IDFilm=".$_GET['idfilm'];
    if($reply = mysqli_query($link, $requetetest)){
        $tuples = mysqli_fetch_assoc($reply);
        $nbresult = mysqli_num_rows($reply);
        if ($nbresult == 0) {
            header("location: index.php");
        }
        else{
            $id = $_GET['idfilm'];
            $requete="SELECT * FROM Film WHERE IDFilm='".$id."'";
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
                                <a href="index.php">Index</a>
                            </nav>
                        </header>
                        <main>
                            <?php
                            getBlock('titre.php', $tuples['Titre']);
                            getBlock('dateparu.php', $tuples['DateParution']);
                            getBlock('synopsis.php', $tuples['Synopsis']);
                            getBlock('note.php', $tuples['Note']);
                            $requete="SELECT * FROM Photo WHERE IDPhoto IN (SELECT IDPhoto from AssoPhotoFilm WHERE IDFilm=".$id.")";
                            $reply = mysqli_query($link, $requete);
                            getBlock('imagesfilm.php',$reply);
                            $requete="SELECT * FROM Personne WHERE IDPers IN (SELECT IDPers from AssoFilmPers WHERE IDFilm=".$id." AND Role=1)";
                            $reply = mysqli_query($link, $requete);
                            $tuples =mysqli_fetch_assoc($reply);
                            getBlock("inforeal.php",$tuples);
                            $requete="SELECT * FROM Personne WHERE IDPers IN (SELECT IDPers from AssoFilmPers WHERE IDFilm=".$id." AND Role=0)";
                            $reply = mysqli_query($link, $requete);
                            getBlock('acteursprincipaux.php',$reply);
                            ?>
                        </main>
                        <?php
                            getBlock('footer.php',null);
                        ?>
                    </div>
                </body>
            </html>
            <?php
        }
    }
    else{
        header("location: index.php");
    }
}
else{
    header("location: index.php");
}
