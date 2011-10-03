<?php
// The request class. Handles monologue requests.
class Request {

	private $requirements = array();

	public function __construct() {
		// New request object has been created!
		
		
	}
	
	public function addRequirements() {
		if(func_num_args() > 0) {
			for($i = 0; $i < func_num_args(); $i++) {
				$argument = func_get_arg($i);
				
				if(is_string($argument)) {
					
				}
			}
		}
	}
	
	// This static method handles printing a request form. Right now it is
	// just a placeholder form, no styling or anything. May be edited in 
	// the future.
	public static function createRequestForm() {
		include('RequestForm.html');
	}
}

?>