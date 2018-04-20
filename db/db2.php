<?php 


$username = 'root';
$password = '';
$host = '127.0.0.1';
$dbname = 'posts_db';

//  DSN - Data Source Name

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

// PDO - PHP Data Object >>> KREIRANJE KONEKCIJA DO BAZA

$DB = new PDO($dsn, $username, $password);

$isValid = isset($_POST['title']) 
	&& $_POST['title'] != ''
	&& isset($_POST['content']) 
	&& $_POST['content'] != '';

if($isValid){

	$publish_date = date("Y-m-d H:i:s");

	$permalink = str_replace(" ", "-", strtolower($_POST['title']));

	$sql = 'insert into posts (title, content, publish_date, permalink) values (:title, :content, :publish_date, :permalink)';


$query = $DB->prepare($sql);
	
$query->bindValue(':title', $_POST['title'],  PDO::PARAM_STR);
$query->bindValue(':content', $_POST['content'],  PDO::PARAM_STR);
$query->bindValue(':publish_date', $publish_date,  PDO::PARAM_STR);
$query->bindValue(':permalink', $permalink,  PDO::PARAM_STR);

$query->execute();

}


$sql = 'select * from posts';

$query = $DB->query($sql);
$query->execute();

$postovi = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<form action="db2.php" method="post" autocomplete="off">
	<input type="text" name="title" placeholder="Title" >
	<textarea placeholder="content" name="content"></textarea>
	<button type="submit">SAVE</button>
</form>

<table border="1" width="80%">
	<tr>
		<td><b>id</b></td>
		<td><b>title</b></td>
		<td><b>content</b></td>
		<td><b>permalink</b></td>
		<td><b>date</b></td>
	</tr>

	<?php foreach ($postovi as $row){ ?>

	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['content'];?></td>
		<td><?=$row['title'];?></td>
		<td><?=$row['permalink'];?></td>
		<td><?=$row['publish_date'];?></td>
	</tr>
	<?php } ?>

</table>


