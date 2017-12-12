<div id="imagesact">
    <h2>Films joués</h2>
    <?php
        global $link;
        $requeteIDFilm="SELECT * FROM Film WHERE IDFilm IN (SELECT IDFilm FROM AssoFilmPers WHERE IDPers=".$data['IDPers']." AND Role=0)";
        $reply=mysqli_query($link,$requeteIDFilm);
        while ($tuples = mysqli_fetch_assoc($reply))
        {
            $requetePhotoFilm="SELECT * FROM Photo WHERE IDPhoto IN (SELECT IDPhoto FROM AssoPhotoFilm WHERE IDFilm=".$tuples['IDFilm'].")";
            $reply2=mysqli_query($link,$requetePhotoFilm);
            $tuples2=mysqli_fetch_assoc($reply2);
            ?>
            <figure>
                <img src="<?php echo $tuples2['Chemin'];?>">
                <figcaption><a href="film.php?idfilm=<?php echo $tuples['IDFilm'];?>"><?php echo $tuples['Titre'];?></a></figcaption>
            </figure>
            <?php
        }
    ?>
</div>
