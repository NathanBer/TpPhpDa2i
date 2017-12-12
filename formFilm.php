<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 12/12/17
 * Time: 14:43
 */

require_once "connexion.php";
?>
<form action="recherchefilm.php" method="post">
    <h2>Les films</h2>
    <select name="filmvalue">
    <?php
    $requete="SELECT * FROM Film WHERE IDFilm";
    $reply = mysqli_query($link, $requete);
    while ($tuples = mysqli_fetch_assoc($reply)){
        echo "<option value='".$tuples['IDFilm']."'>".$tuples['Titre']."";
    }
    ?>
    </select>
    <button type="submit">recherche</button>
</form>
