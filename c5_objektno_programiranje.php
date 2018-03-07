<?php 

// Object Oriented Propgraming

class Flomaster {

	// public $boja;
	private $boja; // property

	public function smeniBoja ($nova_boja){ // method

		$boi = ['crvena', 'zelena', 'sina', 'crna', 'zolta'];

		if(in_array($nova_boja, $boi)) {

		$this->boja = $nova_boja;
			
		} else {
			echo 'Ne postoi vakva boja: '.$nova_boja.'<br/>';
		}
	}
}

$f1 = new Flomaster;
$f2 = new Flomaster;

// $f1->boja = 'crvena';
// $f2->boja = 'zelena';

$f1->smeniBoja('crnml  j kj  kl a');
$f2->smeniBoja('sina');

print_r($f1);
echo '<br/>';
print_r($f2);

echo '<br/>';


// *******************************************

class Korisnik {

	private $pol;
	private $godini;
	private $ime;

	public function smenipol ($nov_pol){
		$polovi = ['maski', 'zenski', 'neodreden'];
		if(in_array(($nov_pol), $polovi)) {
			$this->pol = $nov_pol;
		} else {
			echo 'Ne postoi pol: '.$nov_pol.'<br/>';
		}
	}

	public function getPol(){
		return $this->pol;
	}
}

$korisnik1 = new Korisnik;
$korisnik2 = new Korisnik;

$korisnik1->smenipol('maski');
$korisnik2->smenipol('zenski');

print_r($korisnik1);
echo '<br/>';
print_r($korisnik2);

echo '<br/>';

echo $korisnik1->getPol;

?>