<?php

class database {
	public function __construct() {
		
	}	
}

/* Monologue class. Elements of a monologue object are:
		-id
		-classifiedDate
		-reader
		-tone
		-age
		-writtenInPeriod
		-quality
		-character
		-profession
		-setting
		-length
		-source
		-title
		-author
		-translation
		-setup
		-monologue
		
	You initialize a monologue with these items in this order.
	You can get one of these values by calling the get function with the name of the element.
	*/
	

class monologue {
	private $info;
	
	public function __construct($id, 
								$classifiedDate, 
								$reader,
								$gender,
								$tone,
								$age,
								$writtenInPeriod,
								$quality,
								$character,
								$profession,
								$setting,
								$length,
								$source,
								$title,
								$author,
								$translation,
								$setup,
								$monologue) {
		$info = array("id" => $id,
					  "classifiedDate" => $classifiedDate,
					  "reader" => $reader,
					  "gender" => $gender,
					  "tone" => $tone,
					  "age" => $age,
					  "writtenInPeriod" => $writtenInPeriod,
					  "quality" => $quality,
					  "character" => $character,
					  "profession" => $profession,
					  "setting" => $setting,
					  "length" => $length,
					  "source" => $source,
					  "title" => $title,
					  "author" => $author,
					  "translation" => $translation,
					  "setup" => $setup,
					  "monologue" => $monologue);
	}

	// Get function. Enter string such as "id" to get that element of the monologue.
	
	public function get($element) {
	
		$return=$info[$element];
		
		if ($return === null) {
  			throw new Exception('Element Doesn`t Exist!');
 		}
 		
 		return $return;
	}
}
?>