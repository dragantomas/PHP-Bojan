<?php 

// db1.php

// echo 'test';

$username = 'root';
$password = '';
$host = '127.0.0.1';
$dbname = 'posts_db';

//  DSN - Data Source Name

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

// PDO - PHP Data Object >>> KREIRANJE KONEKCIJA DO BAZA

$DB = new PDO($dsn, $username, $password);

$isValid = isset($_POST['firstname']) 
	&& $_POST['firstname'] != ''
	&& isset($_POST['lastname']) 
	&& $_POST['lastname'] != ''
	&& isset($_POST['email']) 
	&& $_POST['email'] != ''
	&& isset($_POST['password']) 
	&& $_POST['password'] != '';

if($isValid){
	$sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';

$query = $DB->prepare($sql);

$query->bindValue(':firstname', $_POST['firstname'],  PDO::PARAM_STR);
$query->bindValue(':lastname', $_POST['lastname'],  PDO::PARAM_STR);
$query->bindValue(':email', $_POST['email'],  PDO::PARAM_STR);
$query->bindValue(':password', $_POST['password'],  PDO::PARAM_STR);

$query->execute();

}

$isValidCategory = isset($_POST['category'])
	&& $_POST['category'] != '';

	if($isValidCategory){
		$sql = 'insert into categories (category) values (:category)';

$query = $DB->prepare($sql);

$query->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

$query->execute();
		
	}


// print_r($DB);	

$sql = 'select * from users';

$sql_categories = 'select * from categories';


$query = $DB->query($sql);
$query->execute();

$query_categories = $DB->query($sql_categories);
$query_categories->execute();


// print_r($query->fetchAll(PDO::FETCH_ASSOC));

$korisnici = $query->fetchAll(PDO::FETCH_ASSOC);

$kategorii = $query_categories->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="db1.php" method="post" autocomplete="off">
	<input type="text" name="firstname" placeholder="firstname" >
	<input type="text" name="lastname" placeholder="lastname" >
	<input type="email" name="email" placeholder="email" >
	<input type="password" name="password" placeholder="password" >
	<button type="submit">SAVE</button>
</form>

<table border="1" width="80%">
	<tr>
		<td><b>id</b></td>
		<td><b>firstname</b></td>
		<td><b>lastname</b></td>
		<td><b>email</b></td>
		<td><b>avatar</b></td>
		<td><b>password</b></td>
	</tr>

	<?php foreach ($korisnici as $row){ ?>

	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['firstname'];?></td>
		<td><?=$row['lastname'];?></td>
		<td><?=$row['email'];?></td>
		<td><?=$row['avatar'];?></td>
		<td><?=$row['password'];?></td>
	</tr>
	<?php } ?>
</table>

<br/>
<br/>

<form action="db1.php" method="post" autocomplete="off">
	<input type="text" name="category" placeholder="Category" >
	<button type="submit">SAVE</button>
</form>

<br/>

<table border="1" width="80%">
	<tr>
		<td><b>id</b></td>
		<td><b>Category</b></td>
	</tr>

	<?php foreach ($kategorii as $row){ ?>

	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['category'];?></td>
	</tr>
	<?php } ?>
	</table>




<!-- ZA DOMASNA RABOTA -->

<!-- DA SE DODADAT KATEGORII VO BAZATA -->




