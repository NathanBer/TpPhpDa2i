<div id="imagesfilm">
    <h2>
        Images du film
    </h2>
    <figure>
        <?php
            while($tuples = mysqli_fetch_assoc($data)){
                echo '<img src="'.$tuples['Chemin'].'" alt="'.$tuples['Description'].'">';
            }
        ?>
    </figure>
</div>