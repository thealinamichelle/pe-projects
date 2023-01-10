<?php 


// Psuedo code: Inputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amountInputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amount.




$bill = -2;
$visbill = "$" . $bill ;
$percentage = .20;
$visperc = $percentage * 100 . "%";
$tip = $bill * $percentage;
$subtotal = $tip + $bill;
$total = "$" . $subtotal;


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
<li><?= "Bill: " . "$visbill";?></li>
<li><?= "Tip percentage: " . $visperc;?></li>
<li><?= "Total: " . "$total";?></li>
<ul>

</div>



























