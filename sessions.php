<?php 
session_start();
?>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
	<input type="text" name="ime">
	<button type="submit">Keep!</button>
</form>

<?php
	if(isset($_POST['ime'])){
		$_SESSION['ime'] = $_POST['ime'];
	}
?>

<?php if(isset($_SESSION['ime'])){ ?>
<h3><?=$_SESSION['ime'];?></h3>

<?php } ?>