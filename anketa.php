<?php 

// $izbor = $_POST['p'];

// echo $izbor;

// $hrana = $_POST['hrana'];

// var_dump($hrana);

if(isset($_POST['p'])){
	echo $_POST['p'];
}

echo '<br/>';

if(isset($_POST['hrana'])){
	print_r($_POST['hrana']);

	echo '<br/>';

foreach ($_POST['hrana'] as $h) {
	echo $h;
	echo '<br/>';
}

echo implode(' + ', $_POST['hrana']);
}

$text = $_POST['textarea'];

var_dump($text);

// if(isset($_POST['textarea'])){

$zborovi = explode(" ", $_POST['textarea']);




?>