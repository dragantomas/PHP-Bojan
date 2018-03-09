<?php 

class File {

	private $handle;
	private $filename;

	public function __construct($filename){
		$this->filename = $filename;
		$this->handle = fopen($filename, 'a+');
	}

	public function write($text) {
		fwrite($this->handle, $text);
	}

	public function read() {
		rewind($this->handle);
		return fread($this->handle, filesize($this->filename));
	}

}

$f = new File('fajl.txt');
$f->write('text bla bla bla ');
echo $f->read();

 ?>



 <!-- 

 ZA DOMASNA PET RAZLICNI KLASI SO PO PET RAZLICNI NACINI: KONVERZIJA, matematicki operacii, apload na fajlovi

 kako gorniot primer

  -->