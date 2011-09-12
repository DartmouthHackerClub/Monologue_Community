<?php

/* Database class */
class Database {
	// Database Variables. You need to set these.
	// I tried to make these static but php doesn't like it.
	private $database = "DATABASENAME";
	private $tableName = "TABLENAME";
	private $username = "USERNAME";
	private $password = "PASSWORD";
	private $server = "SERVER";
	
	// Connection variable
	private $con;

	// Constructor.
	public function __construct() {
		// Initialize MySQL
		$this->con = mysql_connect($this->server, $this->username, $this->password);
		if (!$this->con) die ('Could not connect: ' . mysql_error());
		mysql_select_db($this->database,$this->con);
	}
	
	// Search Function
	public function rowsForSearch() {
		// Start Query
		$query = "SELECT * FROM " . $this->tableName . " WHERE ";
		$monologues = array();
		
		// Go through arguments
		if(func_num_args() > 0) {
			for($i = 0; $i < func_num_args(); $i++) {
				$argument = func_get_arg($i);
				
				// If argument is a string
				if(is_string($argument)) {
					$query .= "(Title LIKE '%".$argument."%' OR 
							   Author LIKE '%".$argument."%' OR 
							   Monologue LIKE '%".$argument."%') ";
				}
				
				// If argument is an array
				else if(is_array($argument)) {
					$number = count($argument);
					$counter = 0;
					foreach ($argument as $k=>$v) {
						$query .= "".$k."='".$v."' ";
						$counter++;
						if($counter!=$number) $query .= "AND ";
					}
				}
				
				// Add an "AND" on the end if necessary
				if($i != func_num_args()-1) $query .= "AND ";
				
			}
			
			// DEBUG
			// echo $query;
			
			// Query database, store results in array
			if($result = mysql_query($query, $this->con)) {
				while($row = mysql_fetch_array($result)) {
          	 		$this->monologues[] = new Monologue($row);
        		}
        		return $this->monologues;
        	}
		}
		else echo "Nothing Searched.";
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

}

// Make a new database, search it
$myDatabase = new Database();
$mySearch = $myDatabase->rowsForSearch("the", array("Gender"=>"G01", "WrittenInPeriod"=>"W04"), "it", "kristen dabrowski");


// Print results, for testing purposes
echo "<br><br><br>";
echo "<b>Results:</b><br>";
echo count($mySearch)." records found.";
if(count($mySearch)) {
	echo "They are:<br>";
	foreach($mySearch as $result ) {
		echo $result->getElement("Title")." by ".$result->getElement("Author")."<br>";
	}
}

?>