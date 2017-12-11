<div id="imagesreal">
    <h2>
        Réalisateur
    </h2>
    <figure>
        <?php
        ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
        ini_set('display_errors', 'on');
        ini_set('log_errors', 'on');
        ini_set('error_log', '/path/to/log/php.log');

        $link = mysqli_connect('mysql-nathberoux.alwaysdata.net', '146914', 'azerty')
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        mysqli_select_db($link, 'nathberoux_siteweb')
        or die ('Erreur de sélection de la BD : ' . mysqli_error($link));
        mysqli_set_charset($link, 'utf8');

        $requete="SELECT Chemin FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoPers WHERE IDPers=".$data['IDPers'].")";
        $reply = mysqli_query($link,$requete);
        $tuples = mysqli_fetch_assoc($reply);
        ?>
        <img src="<?php echo $tuples['Chemin'];?>">
        <figcaption><a href="realisateur.php?idreal=<?php echo $data['IDPers'];?>"><?php echo $data['NomPer']." ".$data['PrenomPer'];?></a></figcaption>
    </figure>
</div>