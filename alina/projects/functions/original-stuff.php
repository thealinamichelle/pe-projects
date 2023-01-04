$monsters = [$dreamlu, $lima, $reads, $fragoo, $codey, $banana, $grape];

 

	foreach ($monsters as $monster) {
		// My attempt:
		// 	echo "<p id=" . $monster["id"] . ">Hi! My name is " . $monster["name"] . ". I am " . $monster["age"] . " years old. I love to eat " . $monster["favoritefood"] . "." . "</p>" ;
			


		// You can put individually into the system
			// $name = $monster["name"];
			// echo "<li class='monster'>" . $name . "</li>";

	 	$name = $monster["name"];
	 	$id = $monster["id"];
	 	$portrait = $monster["portrait"];
	 	$status = $monster["adoption status"];
	 	$color = $monster["color"];

// set human readable status message
	 	if ($status == 1) {
	 		$status = "<span>Adopted!</span>";
	 	} else {
	 		$status = "Needs a home!";
	 	}

// styling


	 	$story = "<p> I am " . $monster["age"] . " years old. I love to eat " . $monster["favoritefood"] . ". </p>"; 

	 	echo "<div class='monster' id='" . $id . "'>";


		echo "<adoption-card>".
					"<div class='quick-info'><picture class='portrait'>" .   

					"<img src='" . $portrait . "' >" . "<div class='test' style='background-color:" . $color . ";'></div>" . "</picture>" . "<p class='status' style='background-color:". $color . ";'>" . $status . "</p> </div>" .

					"<div class='details'><h3 class='name'>" . $name . "</h3>" . 

					"<p class='story'>" . $story . "</p>" . "</div></adoption-card>";


		echo "</div>";