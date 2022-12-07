<!-- traccia:
 create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<!-- classe movie -->
<?php
class Movie
{

    public $genre;
    public $title;
    public $description;



    function __construct($_title)
    {
        $this->title = $_title;
    }




    public function getDescription()
    {
        return $this->description;
    }
}


$rocky = new Movie("rocky");

$rambo = new Movie("Rambo");


var_dump($rocky);

var_dump($rambo);