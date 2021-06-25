<?php

// Nome Classe
class Movie{
    // Istanze di ambiente
    public $title;
    public $plot;
    public $year;
    public $genre;
    public $price;

    // Costruttore
    function __construct(string $title, string $plot, int $year, string $genre, float $price)
    {
        $this->title=$title;
        $this->plot=$plot;
        $this->year=$year;
        $this->genre=$genre;
        $this->price=$price;
    }
    // Methodi
    public function getDiscount( float $price)
    {
        return $this->price =($price - ($price * (20 / 100))) ;
    }
    
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

    <?php
    $matrix = new Movie ("Matrix","When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.", 1999, "Sci-FI", 7.99);
    $theWolfOfWallStreet = new Movie ("The Wolf Of Wall Street", "In 1987, Jordan Belfort lands a job as a Wall Street stockbroker for L.F. Rothschild, employed under Mark Hanna. He is quickly enticed into the sex- and drug-fueled stockbroker culture and Hanna’s belief that a broker's only goal is to make money for himself. Jordan loses his job following Black Monday, the largest one-day stock market drop in history, and takes a job at a boiler room brokerage firm on Long Island that specializes in penny stocks. Thanks to his aggressive pitching style and the high commissions, Jordan makes a small fortune.", 2013, "Biographical Black-Comedy Crime", 7.99);
    $fightClub = new Movie ("Fight Club","A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named Tyler Durden (Brad Pitt) and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives. Their perfect partnership frays when Marla (Helena Bonham Carter), a fellow support group crasher, attracts Tyler's attention.",1999, "Drama-Thriller", 6.99);

    $movies = [
        $matrix,
        $theWolfOfWallStreet,
        $fightClub
    ];
    ?>

    <div class="container">
        <?php foreach($movies as $movie){?>
            <div class="movie">
                <h2 class="title">Title: <?= $movie->title?></h2>
                <p class="plot"><strong>Plot: </strong><?= $movie->plot?></p>
                <span class="year"><strong>Release Year: </strong>Release Year: <?= $movie->year?></span>
                <span class="genre"><strong>Genre: </strong><?= $movie->genre ?></span>
                <span class="price"><strong>Original Price: </strong>Original Price: £<?= $movie->price ?></span>
                <span class="discount"><strong>Current Price: </strong>£<?=number_format((float)$movie->getDiscount($movie->price), 2, '.', ''); $movie->getDiscount($movie->price) ?></span>
            </div>
         <?php } ?>
    </div>
    
</body>
</html>