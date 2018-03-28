<?php 

class Vraboten {

	protected $ime;
	protected $plata;

	public function dajIme($i){
		$this->ime = $i;
	}

	public function dajPlata($p){
		$this->plata = $p;
	}

}

interface iVraboten {

	public function PokaziPodatoci(); 

	}

class Smetkovoditel extends Vraboten implements iVraboten {

	public function PokaziPodatoci() {

	}
	
}

class Profesor extends Vraboten implements iVraboten {

	public function PokaziPodatoci() {

	}

}

$smetkovoditel1 = new Vraboten;

$profesor1 = new Vraboten;

$smetkovoditel1->dajIme('Petko Petkovski');
$smetkovoditel1->dajPlata('25.000');

$profesor1->dajIme('Bojan Gavrovski');
$profesor1->dajPlata('100.000');


print_r($smetkovoditel1);

echo '<br/>';

print_r($profesor1);







 ?>