<?php 
    class Movie {
        public $titolo;
        public $regista;
        public $durata = 'N/D';
        public $lingua = 'N/D';
        public $anno = 'N/D';
        public $voto = 'N/D' ;
        public $genere;
    
        public function __construct($_titolo, $_regista, Genere $_genere){
            $this->titolo = $_titolo;
            $this->regista = $_regista;
            $this->genere = $_genere;
        }

        public function getAllGenere() {
            if(!is_null($this->genere)){
                $allGenere = $this->genere->genereone . ', ' . $this->genere->generetwo . ', ' . $this->genere->generethree;
            } else {
                $allGenere = "N/D";
            }
            
            return $allGenere;
        }

    }
?>