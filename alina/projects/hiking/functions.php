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



function getpageparts($page){
			include($page . '.php');
		}


function radioIsSet($submitName, $radioName, $defaultvalue){//A
		if ( !isset($_POST["$radioName"]) ) {//B// sets up the radio group to have a default. if the post isn't set then this is the standard value. 
			$_POST["$radioName"] = "$defaultvalue"; //make sure all the radio items in the group have the same default value
		}//B

	if ( isset($_POST["$radioName"]) ) {//Cif submit is posted to the POST superglobal array
		if ( isset($_POST["$radioName"]) ){//Dand if the radio group name is posted to the array
			$name = $_POST["$radioName"]; //then the same string but now a variable is points to that array item 
			}//D
		}//C
}//A



function ischecked($radioName, $radioItem) {//A

		if ($_POST["$radioName"] == $radioItem){//B if that the superglobal recieved the radio item and it matches the radio group name add "checked".
			return "checked";
		}//B
	}//A









function formsetup($formValue) {
	$formvalue = null;

	if ( isset($_POST["$formvalue"])) {
	 $formvalue = $_POST["$formvalue"];
	}
}


// // NOTES:
// hours needs to be changed to text with limits



  // function getaddress($lat,$lng)
  // {
  //    $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
  //    $json = @file_get_contents($url);
  //    $data=json_decode($json);
  //    $status = $data->status;
  //    if($status=="OK")
  //    {
  //      return $data->results[0]->formatted_address;
  //    }
  //    else
  //    {
  //      return false;
  //    }
  // }
?>



















