<div id="imagesact">
    <h2>
        Acteurs
    </h2>
    <?php
    $requete="SELECT * FROM Personne WHERE IDPers IN (SELECT IDPers FROM AssoFilmPers WHERE IDFilm =".$id." AND Role=0)";
    if($query=mysqli_query($link,$requete)) {
        while ($row = mysqli_fetch_assoc($query)) {
            $idacteur=$row['IDPers'];

        }
    }
    ?>
</div>