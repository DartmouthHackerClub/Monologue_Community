<?php
// Includes
include('SQLConnection.php');

/* Database class */
class Database {
	// Database Variables. You need to set these.
	// I tried to make these static but php doesn't like it.

	private $tableName = "monologue";
	private $monologueRows = array();

	// Constructor.
	public function __construct() {
		// Find what a monologue looks like
		if($result = mysql_query("SHOW COLUMNS FROM ".$this->tableName, SQLConnection::connectdb())) {
			while($row = mysql_fetch_array($result)) {
           		$this->monologueRows[] = $row['Field'];
        	}
        }
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
			if($result = mysql_query($query, SQLConnection::connectdb())) {
				while($row = mysql_fetch_array($result)) {
          	 		$monologues[] = new Monologue($row);
        		}
        		return $monologues;
        	}
		}
		else echo "Nothing Searched.";
	}
	
	// Add function
	public function addMonologue($myMonologue) {
		if(get_class($myMonologue)=="Monologue") {
			$query = "INSERT INTO ".$this->tableName." VALUES (";
			
			//Values
			$number = count($this->monologueRows);
			$counter = 0;
			foreach($this->monologueRows as $row) {
				$query .= "'".$myMonologue->getElement($row)."'";
				$counter++;
				if($counter!=$number) $query .= ", ";
			}
			
			$query .= ")";
			
			mysql_query($query,SQLConnection::connectdb());
		}
		else die("Not a monologue");
	}
	
	// Modify function
	public function editMonologue($monologue) {
		// Delete old monologue
		$query = "DELETE FROM ".$this->tableName." WHERE ID=".$monologue->getElement("ID");
		mysql_query($query, SQLConnection::connectdb());
		
		// Add new monologue
		$this->addMonologue($monologue);
	}
}