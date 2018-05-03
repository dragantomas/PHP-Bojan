<meta charset="UTF-8">

<form action="domasna_030518.php" method="post" autocomplete="off">
	<input type="text" name="category" placeholder="Dodadi kategorija" >
	<button type="submit">SAVE</button>
</form>

<?php

$username = 'root';
$password = '';
$host = '127.0.0.1';
$dbname = 'blog';

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$db = new PDO($dsn, $username, $password);

// Create Category

$isValidCategory = isset($_POST['category']) 
    && $_POST['category'] != '';
    
    if($isValidCategory){
		$sql = 'insert into categories (category) values (:category)';

$sql = 'insert into categories (category) values (:category)';

$query = $db->prepare($sql);

$query->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

$query->execute();

}

// Read Category

$sql_read = 'select * from categories';

$query = $db->query($sql_read);
$query->execute();

$result_read = $db->query($sql_read);

$kategorii = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($kategorii);

?>

<table border="1" width="80%">
	<tr>
		<td><b>id</b></td>
		<td><b>category</b></td>
	</tr>

	<?php foreach ($kategorii as $row){ ?>

	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['category'];?></td>
	</tr>
	<?php } ?>
</table>



<?php

echo '<br/>';
  
// Update Category

$sql_update = "update categories set category='Real Madrid' where id=24";

$query = $db->query($sql_update);
$query->execute();

?>

<form action="domasna_030518.php" method="post" autocomplete="off">
	<input type="number" name="id_select" placeholder="Izbrisi podatoci po Id" >
	<button type="submit">SAVE</button>
</form>

<?php
  
// Delete Category

$id_select = $_POST['id_select'];

$sql_delete = "delete from categories where id='$id_select'";

$query_delete = $db->query($sql_delete);
$query_delete->execute();

// update na tabelata so izbrisana kategorija

$sql_read = 'select * from categories';

$query = $db->query($sql_read);
$query->execute();

$result_read = $db->query($sql_read);

$kategorii = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<table border="1" width="80%">
	<tr>
		<td><b>id</b></td>
		<td><b>category</b></td>
	</tr>

	<?php foreach ($kategorii as $row){ ?>

	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['category'];?></td>
	</tr>
	<?php } ?>

</table>