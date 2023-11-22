<?php 

class Artikli {
    public string $serijskiBroj;
    public string $proizvodjac;
    public string $model;
    public float $cena;
    public int $stanjeNaLageru;

    public function __construct(string $serijskiBroj, string $proizvodjac, string $model, float $cena, int $stanjeNaLageru) {
        $this->serijskiBroj = $serijskiBroj;
        $this->proizvodjac = $proizvodjac;
        $this->model = $model;
        $this->cena = $cena;
        $this->stanjeNaLageru = $stanjeNaLageru;
    }

    public function info() {
        return "Serijski broj: " . $this->serijskiBroj . " proizvodjac: " . $this->proizvodjac . " model: " . $this->model . "cena: " . $this->cena . "stanje na lageru: " . $this->stanjeNaLageru;
    }
    
}

class RAM extends Artikli {
    public string $kapacitet;
    public string $frekvencija;

    public function __construct(string $serijskiBroj, string $proizvodjac, string $model, float $cena, int $stanjeNaLageru, string $kapacitet, string $frekvencija) {
        parent::__construct($serijskiBroj, $proizvodjac, $model, $cena,$stanjeNaLageru);
        $this->kapacitet = $kapacitet;
        $this->frekvencija = $frekvencija;
    }

    public function info() {
        echo "parent::info() kapacitet: $this->kapacitet . frekvencija: $this->frekvencija";
    }
}

class CPU extends Artikli {
    public int $brojJezgra;
    public string $frekvencija;

    public function __construct(string $serijskiBroj, string $proizvodjac, string $model, float $cena, int $stanjeNaLageru, int $brojJezgra, string $frekvencija) {
        parent::__construct($serijskiBroj, $proizvodjac, $model, $cena, $stanjeNaLageru);
        $this->brojJezgra = $brojJezgra;
        $this->frekvencija = $frekvencija;

    }

    public function info() {
        echo "parent::info() broj jezgara: $this->brojJezgra frekvencija: $this->frekvencija";
    }
}

class HDD extends Artikli {
    public string $kapacitet;

    public function __construct(string $serijskiBroj, string $proizvodjac, string $model, float $cena, int $stanjeNaLageru, string $kapacitet) {
        parent::__construct($serijskiBroj, $proizvodjac, $model, $cena, $stanjeNaLageru);
        $this->kapacitet = $kapacitet;
    }

    public function info() {
        echo "parent::info() kapacitet: $this->kapacitet";
    }
}

class GPU extends Artikli {
    public string $frekvencija;

    public function __construct(string $serijskiBroj, string $proizvodjac, string $model, float $cena, int $stanjeNaLageru, string $frekvencija) {
        parent::__construct($serijskiBroj, $proizvodjac, $model, $cena, $stanjeNaLageru);
        $this->frekvencija = $frekvencija;
    }

    public function info() {
        echo "parent::info() frekvencija: $this->frekvencija";
    }
}

class Prodavnica {
    private $listaArtikala = [];

    public function dodajArtikal(Artikli $artikal) {
        $this->listaArtikala[] = $artikal;
    }

    public function prikaziArtikle() {
        foreach($this->listaArtikala as $artikal){
            $artikal->info();
        }
    }
}

$prodavnica = new Prodavnica();

$artikal1 = new RAM("234", "Apple", "Air", 1000, 3, "250gb", "2.2 GHz");
echo "Model $artikal1->model proizvodjaca $artikal1->proizvodjac ima $artikal1->kapacitet kapacitet i na lageru ga ima $artikal1->stanjeNaLageru";




