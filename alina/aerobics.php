<?php 


// Psuedo code: Inputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amountInputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amount.




$bill = -2;
$prettybill = "$" . $bill ;
$percentage = .20;
$prettyperc = $percentage * 100 . "%";
$tip = $bill * $percentage;
$total = $tip + $bill;
$prettytotal = number_format($total, 2, ".", ",");


?>



<div>

<h2>TIP APP:</h2>

<h3>Test Driven Development - Psuedo Code:<h3>

<ol>
<li>Process: $subtotal = format round to nearest #.#0</li>
<li>Input: negative numbers Output: "This is a happy calculator. Positive numbers only please. See my friend the Mr. Fee App to calculate debt."</li>
<li>text inputs: "I'm sorry. I don't understand."</li>
</ol>
</div>



<div style="background-color: lightgrey">
<h3>A HANDY DANDY TIP APP</h3>
<ul>
<li><?= "Bill: " . "$prettybill";?></li>
<li><?= "Tip percentage: " . $prettyperc;?></li>
<li><?= "Total: " . "$prettytotal";?></li>
</ul>

</div>



<div>
<?php 

$sandwhich = 6.99;
$tax = 0.10;
$total = $sandwhich + ($sandwhich * $tax);
$prettytotal = number_format($total, 2, ".", ",");

echo $prettytotal;
?>
</div>


<h2>Basic math, concatenation, displaying to screen</h2>
<div>

<?php 


//create a string and assign it to a variable

$myReference = "A string";

$guests = 5;
$people = $guests +1; //Ivy
$berries = 2;



$total = $berries * $guests;

echo $total;
$message = "<p> We will need " . $total . " berries for " . $guests . " guests. And dont forget Ivy! That'll be $total in total.</p>";

echo $message;

//4 guests
//15 berries per person
//26 per box
//price per box
//total

$boxPrice = 7;
$box = 26;
$berriesPerPerson = 15;
$dBox = (round($berriesPerPerson / $box, 2));
$totalbox = $dBox * $boxPrice;
$people= 4;
$total = $people * $totalbox;

echo "We will spend $totalbox per" . "person for a total of $total." ;

?>

</div>

<?php 
//5 variables
//1 math equation

$whoCares = "Alina";
$howManyPerMin = 1;
$howManyPerHour = $howManyPerMin * 60;
$howManyPerDay = $howManyPerHour * 12;
$token = "spider";

$message = $whoCares . " finds " . $howManyPerMin . " spider every min, " . $howManyPerHour . " per hour, and " . $howManyPerDay . " per day.";

echo "During the summer $message There are {$token}s everywhere!";
?>


<h2>Arrays and Some Loops</h2>

<div>
<?php

$age = 35;
$friend1 = "Alina";
$friend2 = "Liz";

$myArray = [$age, $friend1, $friend2];

echo "methods for showing these variables in php<br>";

echo "<br><b>method one</b><br>";
echo "$age $friend1 $friend2";
echo "<br><br><b>method two</b><br>";
echo $age . $friend1 . $friend2;
echo "<br><br><b>method three</b><br>";
foreach ($myArray as $array) {
echo "<li>$array</li>";
}
echo "<br><b>method four</b><br>";
echo "<pre>";
echo "<code>";
print_r($myArray);
echo "</pre>";
echo "</code>";




$my2ndArray = [1, 2, 3, 4, 5];
$hair = ["ties", "scrunchies", "ribbons", "headbands", "clips", "bobbypins"];
$dogs = ["scottie", "mixed", "hound", 5, true];

echo "<li>" . $my2ndArray[3] . "</li>";
echo "<li>" . $hair[1] . "</li>";
echo "<li>" . $dogs[0] . "</li>";
echo "end";

foreach ($dogs as $dog) {
	echo "<li>$dog</li>";
}
?>

</div>

<div style="background:lightgrey">
<?php 


//for (setup variable//)
//initializing the variable, testing the variable, increment the variable
//starts at 0, smaller than 10? yes then run the code


//++ adds one each loop
//-- takes one away

for ($dogs = 1; $dogs <= 20; $dogs++) {
	echo "<li>$dogs</li>";

}

?>

</div>

<div style="background:seashell;">
<h3> six favorite bands and 8 fav numbers loops</h3>
<?php 

$bands = ["Sufjan Stevens", "Nickle Creek", "Flight of the Conchords", "Pink Martini", "Punch Brothers", "Queen"];
$numbers = [2,3, 33, 67, 35, 9, 11, 8];

foreach ($bands as $band) {
	echo "<li>$band</li>";
}

foreach ($numbers as $number) 
	echo "$number, ";





?>
<div style="background:lightblue;">


<div>

<h3> Echo a numbered loop under 34 except 12, 17, 23</h3>
<?php 

$max = 34;
for ($i = 0; $i < $max; $i = $i + 1) {
	
		if ($i != 12 and $i != 17 and $i != 23){
					echo $i . "\n\r";
}
}
?>
</div>

<div>

<h3> Echo a favorite numbered loop under only under 20</h3>
<?php 

$numbers = [2,3, 33, 67, 35, 9, 11, 8];
foreach ($numbers as $number) {

	if ($number < 20) {
	echo "$number, ";

	}
}

?>
</div>





