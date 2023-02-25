<?php

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}


function formatCode($things) {
    echo "<code class='show-code'>";
      echo "<pre>";
        print_r($things);
      echo "</pre>";
    echo "</code>";
  }

function queryString() {
  return $_SERVER['QUERY_STRING'];
}


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
	//$page or other variable needs to be set in the query string with an 
	// $page = "home"; //default is home
	// if ( isset($_GET["page"]) ) {
	// 	$page = $_GET["page"]; //url?page=string
	// }
	// else {
	// 	$page = "home"; //default
	// 	}



function getRoot($pageName){
		$base_dir = __DIR__;
		$pageName = $base_dir;
}


	function checkTarget($external, $uniquetarget) {

		if ($external = true){
			return 'target="' . $uniquetarget . '"';			
		}

	}




?>




















