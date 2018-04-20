<?php 

include('../models/posts.php');

$res = get_blog_posts();

?>

<table border="1">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>permalink</th>
		<th>content</th>
		<th>publish date</th>
		<th>uid</th>
		<th>image</th>
		<th>thumbnail</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['title']?></td>
		<td><?=$row['permalink']?></td>
		<td><?=$row['content']?></td>
		<td><?=$row['publish_date']?></td>
		<td><?=$row['uid']?></td>
		<td><?=$row['image']?></td>
		<td><?=$row['image_thumbnail']?></td>
	</tr>
	<?php } ?>
</table>