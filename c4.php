<?php 

// print_r($_FILES);

$filename = $_FILES['image']['name'];

$tmp = $_FILES['image']['tmp_name'];

$err = $_FILES['image']['error'];

$size = $_FILES['image']['size'];

$type = $_FILES['image']['type'];

$allowed = ['image/jpeg', 'image/png', 'image/pjpeg'];

if($err > 0) {
	echo "Error while uploading";
}

echo '<br/>';	

if(!in_array($type, $allowed)) {
	echo "Filetype not allowed";
	exit();
}

if($size >= 3 * 1024 * 1024) {
	echo "File is too big!";
	exit();
} 

move_uploaded_file($tmp, 'uploads/'.$filename);

echo '<img src="uploads/'.$filename.'">';

echo '<br/>';
echo '<br/>';

?>

<img src="uploads/<?=$filename;?>">	