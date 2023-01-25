<?php

function showerrors(){
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}


function show($variable) {
  echo "<pre class='code'>";
    echo "<code>";
      echo print_r( $variable );
    echo "</code>";
  echo "</pre>";
}


function getpageparts($page) {
			include($page . '.php');
		}

Function radioInitialization($radioName, $defaultValue) {
		if ( !isset($_POST["$radioName"]) ) {//A// sets up the radio group to have a default. if the post isn't set then this is the standard value. 
			$_POST["$radioName"] = "$defaultValue"; //make sure all the radio items in the group have the same default value
		}//A
}

function radioSetup($radioName){//A
	if ( isset($_POST["$radioName"]) ) {//B - if submit is posted to the POST superglobal array
		if ( isset($_POST["$radioName"]) ){//C - and if the radio group name is posted to the array
			$name = $_POST["$radioName"]; //then the same string but now a variable is points to that array item 
			}//C
		}//B
}//A





function formsetup($formValue) {
	$formvalue = null;

	if ( isset($_POST["$formvalue"])) {
	 $formvalue = $_POST["$formvalue"];
	}
}




function ischecked($radioName, $radioItem) {//A

		if ($_POST["$radioName"] == $radioItem){//B if that the superglobal recieved the radio item and it matches the radio group name add "checked".
			return "checked";
		}//B
	}//A



?>
