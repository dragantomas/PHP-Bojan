<?php 

//textfile.php

$fh = fopen('iminja.txt', 'a+');

fwrite($fh, 'Pero ');

rewind($fh);

$iminja = fread($fh, filesize('iminja.txt'));

echo $iminja;

fclose($fh);

?>