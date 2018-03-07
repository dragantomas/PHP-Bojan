<?php 

$ime = trim($_POST['ime']);
$prezime = trim($_POST['prezime']);
$email = trim($_POST['email']);
$lozinka = trim($_POST['lozinka']);
$lozinkaPotvrdi = trim($_POST['lozinka-potvrdi']);

$err = 0;

if(strlen($ime) <=2){$err++;}

echo $err;

if(strlen($prezime) <=2){$err++;}

echo $err;

if(strlen($lozinka) <=5 || strlen($lozinkaPotvrdi <=5) || $lozinka != $lozinkaPotvrdi){$err++;}

echo $err;

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){$err++;}

echo $err;

if($err !=0) {
	echo "Korisnikot ne e kreiran";
} elseif ($err==0){
	echo 'Korisnikot so'. $ime.' e kreiran';
}


?>