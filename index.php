<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site sur les films</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="conteneur">
        <header>
            <nav>
                <a href="index.php">Index</a>
            </nav>
        </header>
        <main>
            <?php
                require_once "formFilm.php";
            ?>
        </main>
        <footer>
            Nathan BERNARD-ROUX 2017
        </footer>
    </div>
</body>
</html>