<?php

// Work in progess. This handles SQL stuff but isn't very useful right now because
// there are only two other classes. Maybe when there are more it will be more useful
// because you won't have to put all the connection information into every class.
// I'll just leave this here for now.
class MonologueSQL {
	public $con;
	private $database = "monologuedb";
	private $tableName = "request";
	private $username = "root";
	private $password = "sniggle";
	private $server = "127.0.0.1";
	
	public function __construct($table) {
		$this->con = mysql_connect($this->server, $this->username, $this->password);
		if (!$this->con) die ('Could not connect: ' . mysql_error());
		mysql_select_db($this->database,$this->con);
	}
}

?>