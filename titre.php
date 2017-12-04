<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 14/11/17
 * Time: 11:47
 */
if($query=mysqli_query($link,$requete)) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo $row['Titre'];
    }
}
?>
<h1 id="titre">
            <?php

            ?>
</h1>