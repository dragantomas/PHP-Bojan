<?php 

class A {
	protected $name;
	
	public function start(){
		echo 'Starting: '.$this->name.'<br/>';
	}

	public function setName($n){
		$this->name = $n;
	}
}

class B extends A {

	public function end(){
		echo 'Ending: '.$this->name.'<br/>';
	}

}

// $b = new B;

// $b->setName('Janko');
// $b->start();
// $b->end();

class Document{
	public $name;
	public $size;
	public $type;
}

interface iDocument {
	public function GetContent();
}

class Excell extends Document implements iDocument {
	public function GetContent() {
		echo 'Excel'.'<br/>';
	}
}

class Word extends Document implements iDocument {
	public function GetContent() {
		echo 'World'.'<br/>';
	}
}

class PowerPoint extends Document implements iDocument {
	public function GetContent() {
		echo 'PowerPoint'.'<br/>';
	}
}

?>