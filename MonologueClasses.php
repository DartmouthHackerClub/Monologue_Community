<?php

/* Database class */
class Database {
	private $database = "monologuedb";
	private $tableName = "monologue";
	private $monologues = array();

	// Constructor.
	public function __construct($server, $username, $password) {
		// Initialize mysql
		$con = mysql_connect($server, $username, $password);
		if (!$con) die ('Could not connect: ' . mysql_error());
		mysql_select_db($this->database,$con);
		
		// Get contents
		$query = "SELECT * FROM " . $this->tableName;
		$result = mysql_query($query,$con);
		
		// Organize into objects
		while($row = mysql_fetch_array($result)) {
			$this->monologues[] = new Monologue($row);
		}
	}
	
	public function rowsForSearch() {
		$goodMonologues = $this->monologues;
		if(func_num_args() > 0) {
			for($i = 0; $i < func_num_args(); $i++) {
				$argument = func_get_arg($i);
				
				//debug
				echo $i."<br>";
				echo $argument;
				
				if(is_string($argument)) {
					$goodMonologues = $this->monologuesWithString($goodMonologues, $argument);
				}
			}
			return $goodMonologues;
		}
		else {
			echo "Nothing Searched.";
		}
	}
	
	private function monologuesWithString($monologues, $string) {
		$goodMonologues = array();
		for($i = 0; $i<count($monologues); $i++) {
			if($monologues[i]->inMonologue($string)) $goodMonologues[] = $monologues[i];
		}
	}
}


/* Monologue class */
class Monologue {
	private $attributes;
	
	public function __construct($row) {
		$this->attributes = $row;
	}


	// Get element. Enter string such as "id" to get that element of the monologue.	
	public function getElement($element) {
	
		$return=$this->attributes[$element];
		
		if ($return === null) {
  			die("Element Doesn't Exist!");
 		}
 		
 		return $return;
	}
	
	public function inMonologue($string) {
		if(in_array($string, $this->attributes)) {
			echo $this->attributes['ID']."->YES";
			return TRUE;
		}
		
	} 
}

$myDatabase = new Database("127.0.0.1","root","sniggle");
$mySearch = $myDatabase->rowsForSearch("testicle");
echo count($mySearch);

?>