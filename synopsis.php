<div id="synopsis">
    <h2>
        Synopsis
    </h2>
    <section>
        <article>
            <?php
            if($query=mysqli_query($link,$requete)) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<p>".$row['Synopsis']."<p>";
                }
            }
            ?>
        </article>
    </section>
</div>