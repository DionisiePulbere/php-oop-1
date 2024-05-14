<?php 
require_once __DIR__ . '/Models/Genere.php';
require_once __DIR__ . '/Models/Movie.php';

$fastone_genere = new Genere('Azione');
$fastone_genere->generetwo = "Thriller";


$fastone = new Movie('Fast and Furious', 'Rob Cohen',$fastone_genere);
$fastone->durata = "106 min";
$fastone->lingua = "USA";
$fastone->anno = "2001";
$fastone->voto = "4.5/5";

$mission_genere = new Genere('Azione');
$mission_genere->generetwo = "Avventura";

$mission = new Movie('Mission: Impossible Dead Reckoning - Parte Uno', 'Christopher McQuarrie',$mission_genere);
$mission->durata = "156 min";
$mission->lingua = "USA";
$mission->anno = "2023";
$mission->voto = "4.1/5";

$movies = [$fastone, $mission];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies PHP-OOP</title>
</head>
<body>
    <main>
        <?php foreach($movies as $movie) {?>
            <h1><?= $movie->titolo ?></h1>
            <div>Regista: <?= $movie->regista ?></div>
            <div>Genere: <?= $movie->getAllGenere(); ?></div>
            <div>Anno: <?= $movie->anno ?></div>
            <div>Lingua: <?= $movie->lingua ?></div>
            <div>Durata: <?= $movie->durata ?></div>

        <?php }?>

    </main>
</body>
</html>