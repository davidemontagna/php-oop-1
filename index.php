<?php

require_once __DIR__.'/classes/Movie.php';

$movies = [
    new Movie("Star Wars: L'impero colpisce ancora", 1980, ['Fantascienza', 'Azione', 'Avventura', 'Epica spaziale']),
    new Movie("Django Unchained", 2012, ['Western', 'Azione', 'Drammatico', 'Avventura']),
    new Movie("Il buono, il brutto, il cattivo", 1966, ['Western', 'Azione', 'Avventura']),
    new Movie("Titanic", 1997, ['Drammatico', 'Romantico', 'Film storico-drammatico']),
    new Movie("L'ora più buia", 2017, ['Guerra', 'Drammatico', 'Fiction storica']),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <ul>
        <?php
            foreach($movies as $movie){
                echo "<li>Name: {$movie->getName()}</li>";
                echo "<li>Genre: {$movie->getGenre($movie)}</li>";
                echo "<li>Year: {$movie->getYear()}</li><br>";
            }
        ?>
    </ul>
</body>
</html>

