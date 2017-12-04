<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site sur les films</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('error_log', '/path/to/log/php.log');

$link = mysqli_connect('mysql-nathberoux.alwaysdata.net', '146914', 'azerty')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($link, 'nathberoux_siteweb')
or die ('Erreur de sélection de la BD : ' . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$requête="SELECT Chemin FROM Photo WHERE IDPhoto IN (SELECT IDPhoto from AssoPhotoPers WHERE IDPers IN (SELECT IDPers from Personne WHERE NomPer='Nolan'))";
if($query = mysqli_query($link,$requête)){
    while($row = mysqli_fetch_assoc($query))
    {
        echo"<figure><img src=".$row['Chemin']."></figure>";
    }
}
?>
</body>
</html>