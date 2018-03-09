<?php 

class Avtomobil {

	private $proizvoditel;
	private $model;
	private $boja;
	private $gorivo;
	private $godina;

	public function __construct($p, $m){
		$this->setProizvoditel($p);
		$this->setModel($m);
	}

		public function setProizvoditel($p) {
			$proizvoditeli = ['seat', 'folksvagen', 'bmw', 'mercedes'];
			if(in_array($p, $proizvoditeli)){
				$this->proizvoditel = $p;
			}
		}
		public function getProizvoditel(){
			return $this->proizvoditel;
		}
		
		public function setModel($m) {
			$modeli = ['kupe', 'sedan', 'karavan', 'minivan'];
			if(in_array($m, $modeli)){
				$this->model=$m;
				}
			}
		public function getModel(){
			return $this->model;
		}

		public function setBoja($b) {
			$boi = ['bela', 'crna', 'crvena', 'sina'];
			if(in_array($b, $boi)){
				$this->boja=$b;
			}
		}
		public function getBoja(){
			return $this->boja;
		}

		public function setGorivo($g) {
				$goriva = ['benzin', 'dizel', 'plin', 'elektricen'];

				if(in_array($g, $goriva)){
					$this->gorivo=$g;
				}
			}
		public function getGorivo(){
			return $this->gorivo;
		}

		public function setGodina($gd) {
			if ($gd > 1920) {
				$this->godina=$gd;
			}
		}
		public function getGodina(){
			return $this->godina;
		}


	public function vozi(){
		echo "Si vozam so ".$this->proizvoditel." ".$this->model." niz grad".'<br/>';
}

	public function koci(){
		echo "Si vozam so ".$this->boja." na ".$this->gorivo." niz grad ".$this->godina." i odednas zakociv";
}

}



$novaKola = new Avtomobil('bmw', 'sedan');

// $novaKola->setProizvoditel('seat');
// $novaKola->setModel('kupe');
$novaKola->setBoja('crvena');
$novaKola->setGorivo('benzin');
$novaKola->setGodina(2015);

// print_r($novaKola);

$novaKola->vozi();

$novaKola->koci();











 ?>