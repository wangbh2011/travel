<?php

class DBAccess{
	
	public static $conn = null;
	
	public static function getConn(){
		if($conn == null) {
			try {
			} catch (PDOException $e) {
				exit('�ǩ`���٩`���ӾAʧ����'.$e->getMessage());
			}
		}
		$conn = new PDO('mysql:host=localhost;dbname=tiner;charset=utf8','tiner','tiner');
		return $conn;
	}
	
}




?>