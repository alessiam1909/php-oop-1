<?php 

class Movie {
    public $titolo;
    public $genere;
    public $regista;
    public $durata;
}

 $movie_1 = new Movie();
 $movie_2 =  new Movie();
 $movie_3 = new Movie();

 function __construct($titolo, $genere, $regista, $durata){
    $this->titolo = $titolo;
    $this->genere = $genere;
    $this->regista = $regista;
    $this->durata = $durata;
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Primo esercizio OOP</title>
</head>
<body>
    
</body>
</html>