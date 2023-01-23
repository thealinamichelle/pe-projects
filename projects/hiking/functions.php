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

function citiesDropDown () {
	echo '<option value="Agoura_Hills">Agoura Hills</option>
							<option value="Alhambra">Alhambra</option>
							<option value="Arcadia">Arcadia</option>
							<option value="Artesia">Artesia</option>
							<option value="Avalon_">Avalon</option>
							<option value="Azusa">Azusa</option>
							<option value="Baldwin_Park">Baldwin Park</option>
							<option value="Bell">Bell</option>
							<option value="Bell_Gardens">Bell Gardens</option>
							<option value="Bellflower">Bellflower</option>
							<option value="Beverly_Hills">Beverly Hills</option>
							<option value="Bradbury">Bradbury</option>
							<option value="Burbank">Burbank</option>
							<option value="Calabasas">Calabasas</option>
							<option value="Carson_">Carson</option>
							<option value="Cerritos">Cerritos</option>
							<option value="Claremont">Claremont</option>
							<option value="Commerce">Commerce</option>
							<option value="Compton">Compton</option>
							<option value="Covina_">Covina</option>
							<option value="Cudahy_">Cudahy</option>
							<option value="Culver_City">Culver City</option>
							<option value="Diamond_Bar">Diamond Bar</option>
							<option value="Downey_">Downey</option>
							<option value="Duarte_">Duarte</option>
							<option value="El_Monte">El Monte</option>
							<option value="El_Segundo">El Segundo</option>
							<option value="Gardena">Gardena</option>
							<option value="Glendale">Glendale</option>
							<option value="Glendora">Glendora</option>
							<option value="Hawaiian_Gardens">Hawaiian Gardens
							<option value="Hawthorne">Hawthorne</option>
							<option value="Hermosa_Beach">Hermosa Beach</option>
							<option value="Hidden_Hills">Hidden Hills</option>
							<option value="Huntington_Park">Huntington Park</option>
							<option value="Industry">Industry</option>
							<option value="Inglewood">Inglewood</option>
							<option value="Irwindale">Irwindale</option>
							<option value="La_Cañada_Flintridge">La Cañada Flintridge</option>
							<option value="La_Habra_Heights">La Habra Heights</option>
							<option value="La_Mirada">La Mirada</option>
							<option value="La_Puente">La Puente</option>
							<option value="La_Verne">La Verne</option>
							<option value="Lakewood">Lakewood</option>
							<option value="Lancaster">Lancaster</option>
							<option value="Lawndale">Lawndale</option>
							<option value="Lomita_">Lomita</option> 
							<option value="Long_Beach">Long Beach</option>
							<option value="Los_Angeles_title">Los Angeles title</option>
							<option value="Lynwood">Lynwood</option>
							<option value="Malibu_">Malibu</option>
							<option value="Manhattan_Beach">Manhattan Beach</option>
							<option value="Maywood">Maywood</option>
							<option value="Monrovia">Monrovia</option>
							<option value="Montebello">Montebello</option>
							<option value="Monterey_Park">Monterey Park</option>
							<option value="Norwalk">Norwalk</option>
							<option value="Palmdale">Palmdale</option>
							<option value="Palos_Verdes_Estates">Palos Verdes Estates</option>
							<option value="Paramount">Paramount</option>
							<option value="Pasadena">Pasadena</option>
							<option value="Pico_Rivera">Pico Rivera</option>
							<option value="Pomona_">Pomona</option>
							<option value="Rancho_Palos_Verdes">Rancho Palos Verdes</option>
							<option value="Redondo_Beach">Redondo Beach</option>
							<option value="Rolling_Hills">Rolling Hills</option>
							<option value="Rolling_Hills_Estate">Rolling Hills Estate</option>
							<option value="Rosemead">Rosemead</option>
							<option value="San_Dimas">San Dimas</option>
							<option value="San_Fernando">San Fernando</option>
							<option value="San_Gabriel">San Gabriel</option>
							<option value="San_Marino">San Marino</option>
							<option value="Santa_Clarita">Santa Clarita</option>
							<option value="Santa_Fe_Springs">Santa Fe Springs</option>
							<option value="Santa_Monica">Santa Monica</option>
							<option value="Sierra_Madre">Sierra Madre</option>
							<option value="Signal_Hill">Signal Hill</option>
							<option value="South_El_Monte">South El Monte</option>
							<option value="South_Gate">South Gate</option>
							<option value="South_Pasadena">South Pasadena</option>
							<option value="Temple_City">Temple City</option>
							<option value="Torrance">Torrance</option>
							<option value="Vernon_">Vernon</option>
							<option value="Walnut_">Walnut</option>
							<option value="West_Covina">West Covina</option>
							<option value="West_Hollywood">West Hollywood</option>
							<option value="Westlake_Village">Westlake Village</option>
							<option value="Whittier">Whittier</option>
';
}



?>
