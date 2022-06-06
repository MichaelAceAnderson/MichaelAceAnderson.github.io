<?php

class Logout{
	public static function DetruitSession()
		session_start();
		session_destroy();
		if(empty($_SESSION['id'])) header("location: login.php");

}
?>