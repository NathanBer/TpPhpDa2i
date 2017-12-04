<div id="date">
    Date de parution:
    <time>
        <?php
        if($query=mysqli_query($link,$requete)) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['DateParution'];
            }
        }
        ?>
    </time>
</div>