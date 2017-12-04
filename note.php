<div id="note">
    <?php
    if($query=mysqli_query($link,$requete)) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<meter value=\"" . $row['Note'] . "\" max=\"5\"></meter><div>Note: " . $row['Note'] . "/5</div>";
        }
    }
    ?>
</div>