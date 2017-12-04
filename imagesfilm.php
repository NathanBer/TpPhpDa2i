<div id="imagesfilm">
    <h2>
        Images du film
    </h2>
    <figure>
        <?php
        $requete="SELECT * FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoFilm WHERE IDFilm =".$id.")";
        if($query=mysqli_query($link,$requete)) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<img src='".$row['Chemin']."' alt='".$row['Description']."'>";
            }
        }
        ?>
    </figure>
</div>