<?php

class DBAccess{
	public static $conn = null;
	public static function getConn(){
		if($conn == null) {
			try {
				$conn = new PDO('mysql:host=localhost;dbname=u536512794_tiner;charset=utf8','u536512794_tiner','tiner');
			} catch (PDOException $e) {
				exit('DB access error!!!'.$e->getMessage());
			}
		}
		return $conn;
	}
}

?>