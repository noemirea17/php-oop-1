<?php
ini_set("display_errors", 1);
class Movie {
    // proprietà
    public $titolo;
    public $genere;
    public $lingua;
    public $durata;
    private $anno;
    public $eta;


    // costruttore
    function __construct($_titolo, $_lingua){
        $this->titolo = $_titolo;
        $this->lingua = $_lingua;
    }

    //metodi

    public function setAnno($_anno) {
        $this->anno = $_anno;
    }

    public function getAnno() {
        return $this->anno;
    }

    public function setEta() {
        $this->eta = 2021 - $this->anno;
    }

    public function getEta() {
        return $this->eta;
    }
    

}

// primo film

$pulpFiction = new Movie('Pulp Fiction', 'Inglese', '1994');
$pulpFiction->genere = "drammatico";
$pulpFiction->durata = "2h 58m";
$pulpFiction->setAnno('1994');
$pulpFiction->setEta();


// var_dump($pulpFiction);


echo "Titolo: ".$pulpFiction->titolo."<br>";
echo "Genere: ".$pulpFiction->genere."<br>";
echo "Lingua: ".$pulpFiction->lingua."<br>";
echo "Durata: ".$pulpFiction->durata."<br>";
echo "Anno: ".$pulpFiction->getAnno()."<br>";
echo "Età: ".$pulpFiction->getEta()."<br>";

echo "<br>";

// secondo film

$perfettiSconosciuti = new Movie('Perfetti Sconosciuti', 'Italiano', '2016');
$perfettiSconosciuti->genere = "commedia";
$perfettiSconosciuti->durata = "1h 37m";
$perfettiSconosciuti->setAnno('2016');
$perfettiSconosciuti->setEta();

echo "Titolo: ".$perfettiSconosciuti->titolo."<br>";
echo "Genere: ".$perfettiSconosciuti->genere."<br>";
echo "Lingua: ".$perfettiSconosciuti->lingua."<br>";
echo "Durata: ".$perfettiSconosciuti->durata."<br>";
echo "Anno: ".$perfettiSconosciuti->getAnno()."<br>";
echo "Età: ".$perfettiSconosciuti->getEta();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
    <body>
        <div>
            <h1><?php echo "Titolo:"." ".$pulpFiction->titolo ?></h1>
            <p><?php echo "Genere: ".$pulpFiction->genere ?></p>
            <p><?php echo "Lingua: ".$pulpFiction->lingua ?></p>
            <p><?php echo "Durata: ".$pulpFiction->durata ?></p>
            <p><?php echo "Anno: ".$pulpFiction->getAnno() ?></p>

        </div>
        <div>
            <h1><?php echo "Titolo:"." ".$perfettiSconosciuti->titolo ?></h1>
            <p><?php echo "Genere: ".$perfettiSconosciuti->genere ?></p>
            <p><?php echo "Lingua: ".$perfettiSconosciuti->lingua ?></p>
            <p><?php echo "Durata: ".$perfettiSconosciuti->durata ?></p>
            <p><?php echo "Anno: ".$perfettiSconosciuti->getAnno() ?></p>

        </div>

    
    </body>
</html>
