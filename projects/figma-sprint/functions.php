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

Function myRadioInitialization($radioName, $defaultValue) {
		if ( !isset($_POST["$radioName"]) ) {//A// sets up the radio group to have a default. if the post isn't set then this is the standard value. 
			$_POST["$radioName"] = "$defaultValue"; //make sure all the radio items in the group have the same default value
		}//A
}

function myRadioSetup($radioName){//A
	if ( isset($_POST["$radioName"]) ) {//B - if submit is posted to the POST superglobal array
		if ( isset($_POST["$radioName"]) ){//C - and if the radio group name is posted to the array
			$name = $_POST["$radioName"]; //then the same string but now a variable is points to that array item 
			}//C
		}//B
}//A;


function myFormSetup($formValue) {
	$formvalue = null;

	if ( isset($_POST["$formvalue"])) {
	 $formvalue = $_POST["$formvalue"];
	}
}


function myIsChecked($radioName, $radioItem) {//A

		if ($_POST["$radioName"] == $radioItem){//B if that the superglobal recieved the radio item and it matches the radio group name add "checked".
			return "checked";
		}//B
	}//A


function mySubmitButton($form){

echo '<button class="';

		foreach($form as $value) {
			echo "$value ";
						};
echo '">';
echo '<svg width="15" height="8" viewBox="0 0 15 8" fill="none">
		<path d="M13.5 7L7.5 1L1.5 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> 
		</svg> 
		</button>';
}







function myButton ($array){
	$customClass = "";
	$target = "";

	if (isset($array["class"]) ){
			$customClass = $array["class"];
	}

	if (!str_contains($array["url"], "localhost:8888") ) {
			$target = "target='$array[url]'";
	}
	if (!str_contains($array["url"], "#") ) {
			$target = "target='$array[url]'";
	}

	$button = "<a href='$array[url]' class='$customClass button' $target>";
	$button .= $array["text"];
	$button .= "</a>";


	return $button;
}


function myLink($array) {
	$customClass = "";
	$textClass = "";
	$target = "";
	$svg = null;
	$text = null;
	$url = "";

	if (isset($array["class"]) ){
			$customClass = $array["class"];
	}
	if (isset($array["text-class"]) ){
			$textClass = "class = " . $array["text-class"];
	}
	if (isset($array["svg"]) ){
			$svg = $array["svg"];
	}

	if (isset($array["text"]) ){
			$text = "<p $textClass>$array[text]</p>";
	}

	if (!str_contains($array["url"], "localhost:8888") ) {
			$target = "target='$array[url]'";
	}
	if (!str_contains($array["url"], "#") ) {
			$target = "target='$array[url]'";
	}

	$link = "<div $customClass'><a href='$array[url]' $target>";
	$link .= "<picture>";
	$link .= print_svg($svg);
	$link .= "</picture>";
	$link .= $text;
	$link .= "</a></div>";


	return $link;
}


function myCheckandPrint($arrays, $array, $subarray, $function){

		if (isset($arrays["$subarray"]) ) {
				foreach ($arrays["$subarray"] as $array) {
					echo $function($array);
				}
		}
		if (!isset($arrays["$subarray"]) ) {
			;
		}
	}

function print_svg($file){
    $iconfile = new DOMDocument();
    $iconfile->load($file);
    return $iconfile->saveHTML($iconfile->getElementsByTagName('svg')[0]);
}






function formButton ($array){
	$customClass = "";
	$customID = "";

	if (isset($array["class"]) ){
			$customClass = $array["class"];
	}

	if (isset($array["id"]) ){
			$customClass = $array["id"];
	}

	$button = "<button class='$customClass' id='$customID'>";
	$button .= $array["text"];
	$button .= "</button>";


	return $button;

}

















?>
