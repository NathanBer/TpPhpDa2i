<div id="imagesreal" class="centered">
    <figure>
        <?php
        global $link;
        $requete="SELECT Chemin FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoPers WHERE IDPers=".$data['IDPers'].")";
        $reply = mysqli_query($link,$requete);
        $tuples = mysqli_fetch_assoc($reply);
        ?>
        <h1><?php echo $data['PrenomPer']." ".$data['NomPer']; ?></h1>
        <img src="<?php echo $tuples['Chemin'];?>">
    </figure>
</div>