<div id="imagesact">
    <h2>
        Acteurs principaux
    </h2>
    <?php
    global $link;
    while($tuples = mysqli_fetch_assoc($data)){
        $requete="SELECT Chemin FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoPers WHERE IDPers=".$tuples['IDPers'].")";
        $reply = mysqli_query($link,$requete);
        $tuple2 = mysqli_fetch_assoc($reply);
        ?>
        <figure>
            <img src="<?php echo $tuple2['Chemin'];?>">
            <figcaption><a href="acteur.php?idacteur=<?php echo $tuples['IDPers'];?>"><?php echo $tuples['NomPer']." ".$tuples['PrenomPer']; ?></a></figcaption>
        </figure>
        <?php
    }
    ?>
</div>