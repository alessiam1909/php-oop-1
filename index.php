<?php 

class Movie {
    public $titolo;
    public $genere = [];
    public $image;
    public $regista;
    public $durata;

    function __construct($_titolo, $_genere, $_image, $_regista, $_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->image = $_image;
        $this->regista = $_regista;
        $this->durata = $_durata;
    }

    public function getDurata($durata){
        $this->durata = $durata;
        $durata= "Durata film: ".$this->durata;
        return  $durata;
    }

    public function printGenre(){
        $genres = $this->genere;
        $genres_string = '';

        foreach($genres as $genre){
            $genres_string .= $genre->name." ";
        };

        return $genres_string;
    }

    


}

class Genre{

    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

 
 $azione = new Genre ('azione');
 $fantasy = new Genre ('fantasy');
 $fantascienza = new Genre ('fantascienza');
 $avventura = new Genre ('avventura');

 $genres=[
    $azione, $fantasy, $fantascienza, $avventura
 ];


 $movie_1 = new Movie("Avatar", $genres,"https://i0.wp.com/www.mobiflip.de/wp-content/uploads/2021/03/avatar-film-poster.jpg?fit=1200%2C825&ssl=1", "James Cameron", "162 minuti");
 $movie_2 =  new Movie("Titanic", $genres,"https://tse2.mm.bing.net/th?id=OIP.__hkNxjspvQRCmFM4_1CrgHaEK&pid=Api", "James Cameron", "194 minuti");
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Primo esercizio OOP</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $movie_1->image; ?>" class="card-img-top" alt="avatar" style="width: 100%; height:200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie_1->titolo; ?></h5>
                    <p class="card-text"><?php echo "Regista: ".$movie_1->regista; ?></p>
                    <p class="card-text"><?php echo $movie_1->getDurata($movie_1->durata); ?></p>
                    <p class="card-text"><?php echo "Generi: ".$movie_1->printGenre(); ?></p>
                </div>
            </div>

            </div>
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $movie_2->image; ?>" class="card-img-top" alt="titanic" style="width: 100%; height:200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie_2->titolo; ?></h5>
                        <p class="card-text"><?php echo "Regista: ".$movie_2->regista; ?></p>
                        <p class="card-text"><?php echo $movie_2->getDurata($movie_2->durata); ?></p>
                        <p class="card-text"><?php echo "Generi: ".$movie_2->printGenre(); ?></p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>