<?php
// The request class. Handles monologue requests.
include('SQLConnection.php');
class Request {
	private $tableName = "request";
	private $requirements = array();

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
	
	public function addRequest() {
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
		mysql_query($query,SQLConnection::connectdb());
	}
	
	// This static method handles printing a request form. Right now it is
	// just a placeholder form, no styling or anything. May be edited in 
	// the future.
	public static function createRequestForm() {
		include('RequestForm.html');
	}
	
	public static function listRequests() {
		$query = "SELECT * FROM request";
		echo "Current Requests:<br>
		<table border=1>
		<tr><td>ID</td><td>Reader</td><td>Gender</td><td>Tone</td><td>Age</td><td>Date</td></tr>";
		if($result = mysql_query($query, SQLConnection::connectdb())) {
			while($row = mysql_fetch_array($result)) {
       	 		echo "<tr>";
       	 		echo "<td>".$row['ID']."</td>";
       	 		echo "<td>".$row['reader']."</td>";
       	 		echo "<td>".$row['gender']."</td>";
       	 		echo "<td>".$row['tone']."</td>";
       	 		echo "<td>".$row['age']."</td>";
       	 		echo "<td>".$row['date']."</td>";
       	 		echo "</tr>";
       		}
        }
        echo "</table><br><br>";
	}
}

?>