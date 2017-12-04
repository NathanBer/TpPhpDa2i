<div id="imagesreal">
    <h2>
        Réalisateur
    </h2>
    <figure>
        <?php
        $requete="SELECT * FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoPers WHERE IDPers IN(SELECT IDPers FROM AssoFilmPers Where IDFilm=".$id." AND Role=1))";
        if($query=mysqli_query($link,$requete)) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<img src='".$row['Chemin']."' alt='".$row['Description']."'>";
            }
        }
        $requete="SELECT * FROM Personne WHERE IDPers IN (SELECT IDPers FROM AssoFilmPers WHERE IDFilm =".$id." AND Role=1)";
        if($query=mysqli_query($link,$requete)) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<figcaption><a href='realisateur.php?idreal=".$row['IDPers']."'>".$row['PrenomPer']." ".$row['NomPer']."</a></figcaption>";
            }
        }
        ?>
    </figure>
</div>