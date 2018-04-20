<?php 

// $username = 'root';
// $password = '';
// $host = '127.0.0.1';
// $dbname = 'posts_db';
// $dsn = 'mysql:host='.$host.';dbname='.$dbname;
// $instance = null;


// function DB(){
// 	if($instance == null) {
// 		$instance = new PDO($dsn, $username, $password);
// 	}
// 	return $instance;
// }

class DB {
	private static $instance;
	private static $username = 'root';
	private static $password = '';
	private static $host = '127.0.0.1';
	private static $dbname = 'posts_db';

	private function __construct(){

	}

	public static function Get() {
		if(self::$instance == null){
			self::$instance = new  PDO('mysql:host='.self::$host.';dbname='.self::$dbname, self::$username, self::$password);
		}
	return self::$instance;
	}

}

?>