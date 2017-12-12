<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 14/11/17
 * Time: 08:40
 */
require_once "connexion.php";
require_once "getblock.php";

if(isset($_GET['idacteur']))
{
    $requetetest="select IDPers from Personne Where IDPers=".$_GET['idacteur'];
    if($reply = mysqli_query($link, $requetetest)){
        $tuples = mysqli_fetch_assoc($reply);
        $nbresult = mysqli_num_rows($reply);
        if ($nbresult == 0) {
            header("location: index.php");
        }
        else{
            $id = $_GET['idacteur'];
            $requete="SELECT * FROM Personne WHERE IDPers='".$id."'";
            $reply = mysqli_query($link, $requete);
            $tuples = mysqli_fetch_assoc($reply);
            ?>
            <html>
                <head>
                    <link rel="stylesheet" type="text/css" href="css/style.css">
                    <?php
                    getBlock('header.php', $tuples['PrenomPer']." ".$tuples['NomPer']);
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
                                getBlock('infoacteur.php',$tuples);
                                getBlock('datenaissance.php',$tuples);
                                getBlock('biographie.php',$tuples);
                                getBlock('filmjoue.php',$tuples);
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
