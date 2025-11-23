<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suivi des capteurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Suivi des capteurs</h1>
    <?php
        include 'data.php'; // récupère les données simulées
        echo "<p>Température : {$temperature} °C</p>";
        echo "<p>Luminosité : {$luminosity} lux</p>";
        echo "<p>Distance : {$distance} cm</p>";
    ?>
</body>
</html>
