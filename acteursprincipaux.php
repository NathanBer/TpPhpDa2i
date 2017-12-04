<div id="acteur">
    <h2>
        Acteurs principaux
    </h2>
    <ol>
        <?php
        $requete="SELECT * FROM Personne WHERE IDPers IN (SELECT IDPers FROM AssoFilmPers WHERE Role=0 and IDFilm in (SELECT IDFilm FROM Film WHERE IDFilm=1))";
        if($query=mysqli_query($link,$requete)) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<li><a href='acteur.php?idacteur=".$row['IDPers']."'>".$row['PrenomPer']." ".$row['NomPer']."</a></li>";
            }
        }
        ?>
    </ol>
</div>