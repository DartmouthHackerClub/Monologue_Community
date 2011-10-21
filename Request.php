<?php
// The request class. Handles monologue requests.
class Request {

	private $con;
	private $requirements = array();
	private $database = "monologuedb";
	private $tableName = "request";
	private $username = "root";
	private $password = "sniggle";
	private $server = "127.0.0.1";

	public function __construct() {
		// New request object has been created!
		
	}
	
	public function addRequirements() {
		if(func_num_args() > 0) {
			for($i = 0; $i < func_num_args(); $i++) {
				$argument = func_get_arg($i);
				
				if(is_string($argument)) {
					// Delimiter is a colon for now
					$args = preg_split("/:/", $argument);
					if(count($args)==2 && $args[0]!='type') {
						$this->requirements[$args[0]] = $args[1];
					}
				}
			}
		}
	}
	
	public function whatAreTheRequirements() {
		foreach($this->requirements as $k=>$v) {
			echo $k." is ".$v."<br>";
		}
	}
	
	private function connectdb() {
		$this->con = mysql_connect($this->server, $this->username, $this->password);
		if (!$this->con) die ('Could not connect: ' . mysql_error());
		mysql_select_db($this->database,$this->con);
	}
	
	public function addRequest() {
		$this->connectdb();
		$query = "INSERT INTO ".$this->tableName." VALUES (NULL, ";
			
		//Values
		$number = count($this->requirements);
		$counter = 0;
		foreach($this->requirements as $k=>$v) {
			$query .= "'".$v."'";
			$counter++;
			if($counter!=$number) $query .= ", ";
		}
		$query .= ", CURRENT_TIMESTAMP)";
		
		mysql_query($query,$this->con);
	}
	
	// This static method handles printing a request form. Right now it is
	// just a placeholder form, no styling or anything. May be edited in 
	// the future.
	public static function createRequestForm() {
		include('RequestForm.html');
	}
}

?>