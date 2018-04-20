<?php 

include_once('../config/db.php');

function get_blog_posts(){
	$sql = 'select * from posts';
	$query = DB::get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_post($data){
	$sql='insert into posts (title, permalink, content, publish_date, uid, image, image_thumbnail) values (:title, :permalink, :content, :publish_date, :uid, :image, :image_thumbnail)';
	$query = DB::Get()->prepare($sql);
	$query->bindValue(':title', $data['title'], PDO::PARAM_STR);
	$query->bindValue(':permalink', $data['permalink'], PDO::PARAM_STR);
	$query->bindValue(':content', $data['content'], PDO::PARAM_STR);
	$query->bindValue(':publish_date', $data['publish_date'], PDO::PARAM_STR);
	$query->bindValue(':uid', $data['uid'], PDO::PARAM_INT);
	$query->bindValue(':image', $data['image'], PDO::PARAM_STR);
	$query->bindValue(':image_thumbail', $data['image_thumbail'], PDO::PARAM_STR);

	$query->execute();
}


?>