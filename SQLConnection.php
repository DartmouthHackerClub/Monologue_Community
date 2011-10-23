<?php

// This handles SQL connections. This file should not be edited unless credentials
// or server changes.
class SQLConnection {
	private static $database = "monologuedb";
	private static $username = "root";
	private static $password = "sniggle";
	private static $server = "127.0.0.1";
	
	public static function connectdb() {
		$con = mysql_connect(self::$server, self::$username, self::$password);
		mysql_select_db(self::$database,$con);
		return $con;
	}
}
?>