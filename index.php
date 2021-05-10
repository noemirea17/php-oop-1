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
$pulpFiction->genere = "giallo/drammatico";
$pulpFiction->durata = "2h 58m";
$pulpFiction->setAnno('1994');
$pulpFiction->setEta();


echo "Titolo: ".$pulpFiction->titolo."<br>";
echo "Genere: ".$pulpFiction->genere."<br>";
echo "Lingua: ".$pulpFiction->lingua."<br>";
echo "Durata: ".$pulpFiction->durata."<br>";
echo "Anno: ".$pulpFiction->getAnno()."<br>";
echo "Età: ".$pulpFiction->getEta()."<br>";

echo "<br>";

// secondo film

$perfettiSconosciuti = new Movie('Perfetti Sconosciuti', 'Italiano', '2016');
$perfettiSconosciuti->genere = "commedia/drammatico";
$perfettiSconosciuti->durata = "1h 37m";
$perfettiSconosciuti->setAnno('2016');
$perfettiSconosciuti->setEta();

echo "Titolo: ".$perfettiSconosciuti->titolo."<br>";
echo "Genere: ".$perfettiSconosciuti->genere."<br>";
echo "Lingua: ".$perfettiSconosciuti->lingua."<br>";
echo "Durata: ".$perfettiSconosciuti->durata."<br>";
echo "Anno: ".$perfettiSconosciuti->getAnno()."<br>";
echo "Età: ".$perfettiSconosciuti->getEta();

