<?php
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
	
	public function printMonologue() {
		echo "
		<b>".$this->attributes['Title']." by ".$this->attributes['Author'].":</b>
		<p>".$this->attributes['Monologue']."</p><br>
		";
	}
}
?>