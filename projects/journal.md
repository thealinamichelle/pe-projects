# My learning journal
### This is my learning journal for personal use. It keeps track of my daily goals, notes any unique learning concepts, and any questions I come up with, first drafts for blog content, or brief exercises for PE prompts. 
-------


div.section > div:first-child
Using the > changes the description to: "Find any divs that are the direct descendents of section divs" which is what you want.




---------


		//CREATE ENTRY
		$newTrail = [
		"name" => $name,
		];
		var_dump($newTrail);


		//PULL UP THE JSON FILE
		// $json_data =json_encode($posts);

		//SAVE ENTRY
		//file_put_contents("myfile.json, $json_data");



---------------------------------------------------------------------------
## 1/20/23


- [x] Set Up Journal Entry
- [x] Stand Up
- [] add learnings from the last few days into the journal
- [] git commit
- [] Milestones
- [] fix personal portal
- [] responsive layout garden!
- [x] waste time on a lame doodle about a slack comment
- [] removing my form setup function in order to add more data validation
- [] styling my form
- [] writing up a readme file
- [] looking over the user log in milestone


Video Notes:

- How to make utilize PHP for page specific styling
	example: Underline / different color on your current page/menu

	the router sets the string for the current page
	you can use that string to create a class
	if the page is the string home add the class or the current page


		<a href="?page=home" class="<?php if ($page == 'home') { echo 'active'}?>"> Home </a>

		<a href="?page=home" class="
				<?php if ($page == 'home') { 
					echo 'active'
				}?>"> 
			Home 
		</a>

-- Remember that this is the router that is allowing the above to work. For the hiking project it is located on the index page:

		$page = "home";
		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		}

-- On the index page: 

		<section class="page-content">
			<div class="inner-column">
		<?php
				getpageparts($page);
		?>
			<div>
		</section>

Now that it will add the class active, you can make the class in your CSS file.


QUESTIONS:
why do these have to be connected?
		nav a.active {
			border-bottom: 10px solid red;
		}




--------------------------------------------------------------------------
## 1/19/23


- [x] Set Up Journal Entry
- [x] Stand Up
- [x] add learnings from the last few days into the journal
- [?] problem solve subtasks kinda?
- [x] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [] responsive layout garden!

Forms- radio

		<div class="radio-row">
		<label for ="2slices">
		<input type="radio" name="this-needs-to-be-thesame" id="what-the-radio-button-is" value="used-to-identify-if-checked" required <?= ischecked("points-to-id")?> >2 slices</label>

		<label for ="4slices">
				<input type="radio" name="this-needs-to-be-thesame" id="what-the-radio-button-is" value="used-to-identify-if-checked" required <?= ischecked("points-to-id")?> >4 slices</label>

		</div>


First lesson in query strings to determine page:
Here we standardize the variable page as equalling home

		$page = "home"; //default is home

Then we use an if it is it set statement. Get will look at the superglobal array to see if "page" is in the array. If it is, then make "page" point to the variable $page.

		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"]; //url?page=string
		}

If it isn't there, then the variable points to "home"

		else {
			$page = "home"; //default

Later on the same page:

We can either use an if else statment. If the $page variable, which points to the superglobal array "page" has "page=home" then include the file home. If it points to "page=trails" include the file trails etc. 

	if ($page == "home") {
	include ('home.php');
	}

	if ($page == "list") {
	include ('trails.php');
	}

	if ($page == null) {
	include ('home.php');
	}

Or we can use a function to make it smaller. 

		function functionname (argument) {
			instructions
		}

the argument has the stand-in variable. Here we still use $page to make it easy. The variable $page points to the "page=name-of-a-page" so now include $page (which is also page=name-of-a-page)

		function getpageparts($page){
			include($page . '.php') //$page or other variable needs to be set in the query string with an 

		}

Note: if the url query string and the site page name don't match this won't work. The superglobal has for instance: 

page=list
but the file name is "trails"
so the page=list and file name don't match. So it doesn't work. 


remember that a function is instructions. So you need to call on those instructions for it to work. You ask for those instructions to run by using the function-name connected to () which holds the argument.
I don't understand what argument means here, but in this case, it needs to hold the variable we need to point to the page name.

		getpageparts($page);

You can tuck away function instructions in a seperate functions file and only call on the function when you need it. 

		<?php include("functions.php") ?>

---------------------------------------------------------------------------
## 1/16/23

- [x] Set Up Journal Entry
- [] Stand Up
- [] add learnings from the last few days into the journal
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [] form 5
- [] make a md file for form review
- [] review forms
- [] responsive layout garden!

weekend
group meeting
4 new forms
sync forms

today: responsive layot garden
form review

blockers deploybot, self checkout

ASK: Alter the program so that an indeterminate number of items can be entered. The tax and total are computed when there are no more items to be entered.
---------------------------------------------------------------------------
## 1/15/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] fixing my footer for mobile(apparently its been fine)
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [x] form 1: Simple Math (slack)
- [x] standardize forms
- [x] pizza party
- [x] paint calculator
- [x] self-checkout
- [] form 5
- [] make a md file for form review
- [] review forms
- [] responsive layout garden!

ASK: Alter the program so that an indeterminate number of items can be entered. The tax and total are computed when there are no more items to be entered.



---------------------------------------------------------------------------
## 1/14/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] fixing my footer for mobile
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [] form 1
- [] form 2
- [] form 3
- [] make a md file for form review
- [] review forms
- [] responsive layout garden!



---------------------------------------------------------------------------
## 1/13/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] fixing my footer for mobile
- [] problem solve subtasks kinda?
- [] css textures
- [x] git commit
- [] Milestones
- [] fix personal portal
- [x] E4P
- [] responsive layout garden!

This allows your to see your forms arrays:

		function show($variable) {
		//   echo "<pre class='code'>";
		//     echo "<code>";
		//       echo print_r( $variable );
		//     echo "</code>";
		//   echo "</pre>";
		// }

Commonly used checked code for forms - used in area calc for radio group

		//function ischecked($v) {
			//if ($_POST["measurementType"] == $v){
				//return "checked";
			//}
		//}


- switch statements
- "==" probably equals
- value is the preset in the input or tells it what to return 
- radio group, 
- - id tag links it to the for in the label
- - label can wrap the input
- - one input needs a checked/not checked
- - make a group by using the same name



---------------------------------------------------------------------------


## 1/12/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] fixing my footer for mobile
- [x] linking out the projects page
- [] problem solve subtasks kinda?
- [] css textures
- [x] git commit
- [] Milestones
- [] fix personal portal
- [x] PHP lessons for programmers
- [x] forms lesson
- [x] practice lesson
- [x] edit base files


### Input types lesson

- input is a self closing tag in html
<input> or <input />

- forms and their inputs and labels utilize attributes:
- - example: type= "number"

- html can send forms to other systems
- - for PHP style forms:
- - - <input type="number" name="berries">
- - -  Each input gets a name and that is used as the key in the submitted Array of content. “POST” means you are sending data to the server vs. requesting it.

- value attribute represents the data but also often the visual content as well

---------------------------------------------------------------------------
## 1/10/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] fixing my footer for mobile
- [] linking out the projects page
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [x] PHP lessons for programmers





### PHP AEROBICS NOTES

#### STYLING
- Adds a space or a line break:
- - "\n\r"
Adds an S to variable within a string
- - "this is how {$variable}s you write it"


#### NUMBER FORMAT
		$prettytotal = number_format($total, 2, ".", ",");

#### ROUNDING
		$box = (round($berriesPerPerson / $perperson, 2));

#### MULTIPLYING
		$total = $people * $totalbox;




#### FOR LOOPS
//for (setup variable//)
//initializing the variable, testing the variable, increment the variable
//starts at 0, smaller than 10? yes then run the code
//++ adds one each loop
//-- takes one away

		for ($dogs = 1; $dogs <= 20; $dogs++) {
			echo "<li>$dogs</li>";
		}

#### IF LOOPS WITH FOR LOOPS
- A numbered loop under 34 except 12, 17, 23

		$max = 34; // SETS THE MAX NUMBER
		for ($i = 0; $i < $max; $i = $i + 1) {
			if ($i != 12 and $i != 17 and $i != 23){
							echo $i ;
			}}
		

- A numbered loop under only under 20

		$numbers = [2,3, 33, 67, 35, 9, 11, 8];
		foreach ($numbers as $number) {
		
			if ($number < 20) {
			echo "$number, ";
		
			}
		}

### PSUEDO CODE NOTES

#### TIP Calculator

##### Questions:
	What should be displayed when the program starts/ends?
	What inputs from the the user do you need?
	A standard or scalable tip amount?
	What outputs?
	What style should the outputs be in?

	What currency?
	Non-numbered inputs, negative numbers, 3+ decimals generate what output?

##### Problem Statement:
	example: Create a simple tip calculator. The program should prompt for a bill amount and a tip rate. The program must compute the tip and then display both the tip and the total amount of the bill. 


#### Saying Hello


Requirements: 
	Program needs to prompt for my name then greet me using my name. 
Constraint: 
	Keep the input, string concatenation, and output separate.
Questions: 
	Keep them in separate files/programs? What does the constraint mean?!

Pre-storage: greeting message 
Input: name
Output: greeting
Process: Inserting name into greeting, storing name

		At the start of the program display “What is your name?”
		Store the name in the name file and store in short term memory.
		Greeting file contains the message: “{{name}} Hello, {{name}}, nice to meet you!”
		Insert name into greeting. 
		Display the greeting message. 

#### Counting the Numbers of Characters

Input: string
Output: display output of string and number of characters it contains
Process: initiating counting, counting numbers in string

Testing
- inputs numbers - proceed
- special characters - proceed
- nothing - displays a message that "nothing is the number count, but that it's something is better than nothing. So there should be something in the input". 
- max number of characters? - max number based off of 10% under max computing power.

Displays a request for input of garbledygook of letters/words/numbers and a start switch.
Name is stored somewhere.
Start switch initiates:
Read the garbledygook.
Count the individual characters in garbledygook. 
Displays number of characters. 

#### Printing Quotes
example output: What is the quote? These aren't the droids you're looking for. Who said it? Obi-Wan Kenobi Obi-Wan Kenobi says, "These aren't the droids you're looking for."

Constraints: non-applicable to psuedo-code

Input: author, quote
Output: author says "inputted string surrounded by quotes"  
Process: insert author and quote with "says", surround string with quotes. 

Testing:
Inputs quotes - if quotes are detected at the begining and end of the string prompt user to remove them. 
Print if user chooses the option to ignore. 
Numbers are inputed - proceed as normal
No input - request input.

Display: What is the quote? 
Recieve quote input.
Store quote input somewhere. 
Display Who said it?
Recieve author input.
Store author input somewhere. 
Retrieve quote.
Read quote and look for "" at the start and end. 
- If detected ask user permission to remove. 
- - If yes remove start and end "" and proceed. 
- - If no ignore start and end "" 
Retrieve author.
Retrieve filler text ", says"
Ignore double quotes and display: author says , " quote input" 
Stop ignore double quotes. 

#### MadLib 

requirements:for a noun, a verb, an adverb, and an adjective and injects those into a story that you create.

Testing: 
enters a wrong input such as a non-noun into noun input: ignore use it anyways, it's fun.
missed input: requested input
missed same input 3 times: 
- store filled inputs somewhere
- retrieve snarky madlib file about impatient users
- display snarky madlib
- display large prompt to go back to users stored madlib.
leaves before end of madlib -
store each madlib input entry somewhere immediately 

Input: a noun, a verb, an adverb, and an adjective
Output: story with strings
Process: inserting strings into story


Pre-Storage: Story with spaces for noun, verb, adjective, and adverbs.
Seperate databases for noun, verb, adjective, and adverb.
Display request for a noun, verb, adjective, and adverb.
As typed:
	Store verb input in verb section database. 
	Store adverb input in verb section database. 
	Store adjective input in verb section database. 
	Store noun input in verb section database. 
Submit initiates: 
	Retrieve story. 
	Retrieve verb. 
	Retrieve adverb.
	Retrieve adjective.
	Retrieve noun.
	Insert noun into noun spaces. 
	Insert verb into verb  spaces. 
	Insert adjectives into adjectives spaces. 
	Insert adverb into adverb spaces. 
	Display new story.


#### Simple Math

Requirements: 
sum/ addiion
difference / subtraction
product / multiplication
quotient / division

Example Output What is the first number? 10 What is the second number? 5

Input: Numbers
Output: Math
Process: math

Testing:
words - 
	check against database of number words
	 - if there is a match sub out number
	 - if no match retrieve and display "that is a not a number" message

Contraints: I'm tired and there are a lot so not today.


Request two numerical inputs:
Store inputs in memory.
Retrieve inputs:
Take first input and add to second input. 
Store result. 
Take second input subtract it from first input.  
Store result. 
Take first input and multiply it to second input. 
Store result. 
Take second input and divide it from first input.
Store result. 
Retrieve visual display of equations.
Retrieve results.
Display visual equations and results. 


#### Retirement Calculator

Requirements: a program that determines how many years you have left until retirement and the year you can retire. It should prompt for your current age and the age you want to retire and display the output as shown in the example that follows.

Example: What is your current age? 25 At what age would you like to retire? 65 You have 40 years left until you can retire. It's 2015, so you can retire in 2055.

Inputs: age, retirment age
Outputs: display of years left til retirement
Process: subtract age of retirement from current age. Take result and add it to the current year. 

Testing: It's 1999, and the years to retirement will exceed 1 year. 
 - Check if the year is stored as 4 numerals. 
 	- if yes! great. No issue.
 	- If no, panic and tell the user to make a survival bunker. 

 Display request for current age.
 Store age input. 
 Display request for age of retirement. 
 Store retirement input. 
 Subtract age from age of retirement. 
 Answer is years til retirement.
 Store years til retirement. 
 Retrieve current year.
 Add answer to current year for year of retirement.
 Store years til retirement.
 Retrieve age and current year.
 Subtract age from current year.
 If result is greater than or equal to 1980 but lesser than or equal to 1996, and age of retirement is lesser than or equal to 65 proceed to option two. Else go to option one. 
 If result is greater than or equal to 2011 proceed to option three. 
 else proceed to option one

 Option One
 Retrieve age, age of retirement, answer, current year and years til retirement. 
 Retrieve message and isert age, age of retirement, answer, current year and years til retirement. 
 Display message: "You have {{years til retirement}} left until you can retire. It's {{current year}}, so you can retire in {{year of retirement}}." 

 Option Two.
 Retrieve age, age of retirement, answer, current year and years til retirement. 
 Retrieve message and isert age, age of retirement, answer, current year and years til retirement. 
 Display message: "Hey there millenial, I know you want to retire in {{years til retirement}}. It's currently {{current year}}, so unless you are already weathly, super lucky, or have a great plan to increase your wealth it's unlikely you'll get to retire by {{year of retirement}}." 

 Option Three:
 Retrieve age, age of retirement, answer, current year and years til retirement. 
 Retrieve message and isert age, age of retirement, answer, current year and years til retirement. 
 Display message: "Hey there whipper snapper, it's both great and scary you are checking how many years you have until retirement. The bad news is you have {{years til retirement}}. The good news is it's only {{current year}}, so you have time to learning some financial literacy now so you can retire in {{year of retirement}}." 

---------------------------------------------------------------------------
##1/9/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] fixing my footer for mobile
- [] linking out the projects page
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal
- [] PHP lessons for programmers


### Exercises for programers - tip calculator
- "gathering requirements" figuring out what featurs the program should have

Examples of questions: 
- what formula do you want to use? 
	- unknown
- How should the tip be calculated?
	- total x tip

- what is the tip percentage
	- 20%
- what should display at start up
	- name of the tip app, input forms

- what should display for output
	- total, total of tip and total with tip


problem statment:
example: Create a simple tip calculator. The program should prompt for a bill amount and a tip rate. The program must compute the tip and then display both the tip and the total amount of the bill. 

example output: 
What is the bill? $200
What is the tip percentage? 15
The tip is $30.00
The total is $230.00

Large programs: break down into component parts to make them easier to manage.

Code that is planned, tested, documented is easier to maintain or extend.

Every program has INPUTS, PROCESS, OUTPUT

example: nouns = inputs/outputs, verbs = process

Inputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amount



TEST DRIVEN DEVELOPMENT 

Inputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amount

Develop 4 test plan for each program


Psuedo code: Inputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amountInputs: bill amount, tip rate Processes: calculate the tip Outputs: tip amount, total amount.


Can you write out the syntax of a function on paper and label all the parts?

	function functionname (variable-standin) {
		code goes here
	};

PHP PRACTICE


Here’s a useful built-in function. It has 4 parameters. The number to work with, the number of decimal places, the character to use as the decimal, and the character to visually denote breaks for thousands.

number_format($total, 2, ".", ",");


foreach notes:
	foreach (guitars and guitar) {
		echo "guitar/n";
	}

	You can create a line break with the mysterious “Backslash.”
	However, we find very few reasons to do so. It’s good to know how though!
	Think “weird slash + n for new line.”

---------------------------------------------------------------------------

##1/7/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] add github to website
- [x] Filling out my resume page
- [x] fixing my footer for mobile
- [] linking out the projects page
- [x] refining the css style naming
- [] do a form
- [] problem solve subtasks kinda?
- [] css textures
- [] git commit
- [] Milestones
- [] fix personal portal

- Form feedbacks:
- Emily: your strength is obviously consistency and understanding of the tools. The area I would like to see growth is in the design itself. You have made such awesome affinity drawings and collect really great style tiles. I would love to see that design carried into your site, or the visual design reflect your background. That way I am not just reading about it, but also feeling it. 
- Jess: your website copy is super clear. It just seems like you need to set a meeting with Derrick and work on puting all the knowledge and skills you have into your site. 
---------------------------------------------------------------------------
##1/6/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] do a form
- [x] resume page
- [x] do a form
- [x] style-guide page
- [] do a form
- [x] projects page
- [] all the forms
- [] Milestones
- [x] goals page
- [x] git commit
- [] problem solve subtasks kinda?
- [] css textures
- [] add github to website

- Form feedbacks:
- Emily: your strength is obviously consistency and understanding of the tools. The area I would like to see growth is in the design itself. You have made such awesome affinity drawings and collect really great style tiles. I would love to see that design carried into your site, or the visual design reflect your background. That way I am not just reading about it, but also feeling it. 
- Jess: your website copy is super clear. It just seems like you need to set a meeting with Derrick and work on puting all the knowledge and skills you have into your site. 

---------------------------------------------------------------------------
##1/4/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] Milestones
- [x] goals page
- [x] functions?
- [] fix monster site
- [] git commit


<?php

// defining a function
function functionName() {
	// mini program to run
	echo "functionName was invoked.";
}

// PHP lovers often write their function and variable names with underscores
// function_name

// "running" or "calling" or "invoking" the function goes like this:
functionName();

// So, in their most simple form: -
// functions are encapsulated programs that can be called upon
// - at a later time - and run as many times as desired

function totalBreakfast() {
	$coffee = 3;
	$muffin = 4;
	$total = $coffee + $muffin;
	echo "Total: $total";
}

totalBreakfast(); // would print "Total: 7" to the screen


201


What is "variable scope"?
Variables have a limited "scope", or "places from which they are accessible". Just because you wrote $foo = 'bar'; once somewhere in your application doesn't mean you can refer to $foo from everywhere else inside the application. The variable $foo has a certain scope within which it is valid and only code in the same scope has access to the variable.

How is a scope defined in PHP?
Very simple: PHP has function scope. That's the only kind of scope separator that exists in PHP. Variables inside a function are only available inside that function. Variables outside of functions are available anywhere outside of functions, but not inside any function. This means there's one special scope in PHP: the global scope. Any variable declared outside of any function is within this global scope.



		<?php 

	$sample = 18; 
	$bob = 3;


// function double($test) {
// 	echo $test * 2;
// }
// 	double($sample);

function mary($sal) {
	echo $sal * 2; 
}

	mary($bob);


	// in this function $sal has an default value of 1
	// "echo $sal * 2" is equivalent 1 x 2= 2
	// mary($bob) the $bob will refers to the variable $bob
	// mary($bob) runs the same functions at mary($sal) but outside of the scope of mary($sal)
	// unclear why mary($bob) is echoed and not both mary($sal) and mary($bob)
	// ITS PRE-WRITTEN INSTRUCTIONS OOOOOH

	// TERMS:
			//function function-name (parameter) {}
			// function-name(argument) {}
?>




<?php 

	// function can-be-any-name() {
	// 	echo 2+2;
	// }
// the () will tell it to run the code

?>





Watch the video!
I did try them :slightly_smiling_face: . The betting example really through me for a loop and I had to reach out for help because I was struggling to follow. Miguel and I deconstructed the example to get a bitter understanding of a function and all it's parts:
I'm not sure how long the video alone took me to get through. I started the video around 1:30pm, Took a break to eat late lunch, reached out to Miguel at 4pm and was in a huddle with him and Derrick for 2 15mins. After that I stepped away from PE stuff for the day. Today I spent about another 45 mins on the video. 


Where can you use PHP?
- Well I know PHP is helpful in diving up the websites into smaller more readable parts, and keeping certain areas more consistent.
- I honestly can't remember the projects we discussed during the consolidation meeting. 
- At least for my own personal website, arrays, foreach loop and functions would be helpful increating snapshops of my projects.
- for each and functions seem to have a few use cases for generating visual stuff. Like rotating through a color set on divs...you could probably even have svgs that appear in different colors in different places without having to insert that svg into the html document again and again.
- ooooh include svg files away from the html document! Oh man that makes me happy. 

Look for some use-cases in the wild
So the first two actually look like they use javascript but there could be PHP too. 

1. DoTimely's client database system. Pulling data on clients and using that information in the calendar. These are on two seperate pages. 
2. DoTimely's header is the same across multiple pages.
3. Etsy taking seller entered information and presenting it in a uniform manner.



---------------------------------------------------------------------------
##1/3/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] Milestones
- [] goals page
- [x] style tiles for monster site
- [x] monster site
- [x] git commit


		foreach ($array as $anothervariable) {
			Do these instructions
		}

		// You can put individually into the system
			// $name = $monster["name"];
			// echo "<li class='monster'>" . $name . "</li>";

- Question: How could I insert a normal array without adding it by hand as a key-value pair? I
So I would like each sample to be assigned a color from the color array, but I don’t want to write it out with each new sample addition.
Is another foreach the answer? I can’t quite figure out the next steps or if it’s doable.


		<?php

		$colorArray = ["red", "black", "white"];


		$sample = [
			"name" => "Sample",
			"color" => "red", ];

		$sample2 = [
			"name" => "Sample2",
			"color" => "black", ];

		$sample3 = [
			"name" => "Sample3",
			"color" => "white", ];

		$kids = [$sample, $sample2, $sample3];

		foreach ($kids as $kid) {

			$name = $kid["name"];
			$color = $kid["color"];


			$story = "<p>" . $kid["name"] . "</p>"; 

			echo "<div style='background-color:" . $color . ";'>" . $story . "</div>";

			}
		?>



---------------------------------------------------------------------------
##1/2/23

## Notes
***
### NORMAL ARRAYS

	$thing = [1, true, "dog", "cat"];
    
 - With normal arrays we can find associations by installing a [number] next to the variable like so: `$newidea[2]`


### ASSOCIATIVE ARRAYS

 - one set of brackets determines an array. Arrays that build key associations are called associative arrays. The "=>" shows a key value pairs/	
 
	$object = [ 
      "id" => " term", 
      "key" => "value?" ,
      "example" => numbers,
      "second_example" => true,
      "third_example" => 120,
      "another_array_within_an_array" => ["another" , "don't forget the commas"],]
 	
- For an Associative arrays we can select an value by the value key. `$object["key"];`
- In HTML it will look like:
		
		<p> My favorite thing is <?=$object["key"]?>.</p>


### Color Systems:
- CMYK - printing, cyan magenta yellow black
- LAB colors
- Greyscale - no hues
- RGB

		.thing {
        color: red;
        color: rgb(255, 10, 50); /*these are hard to guess!*/
        color: rgba(255, 10, 50, .5); /*adds transparency*/
        }

#### HSL 
- Three values: WHEEL/ saturation / value
- Example:
		body {
		 	background:hsl(0, 50%, 100%);
		 }
- First value, where is the hue located on the wheel?
	- first number is 0-360
	- The pattern is circular. 0 is red and so is 360
	- Think of a clock: 
		- 12 red (0/360)
		- 2 yellow (60)
		- 4 green (120)
		- 6 cyan (180)
		- 8 blue (240)
		- 10 magenta (300)

- Second value is saturation 
	- between 0 (grey) to 100% (full saturation)

- Third number is value
	- range is 0 - 100%
	- 0% is black (clue no light)
	- 100% is white (all light)
	- 50% is pure hue

### Loops and Arrays

#### Objectives:

- work on a style tile (Monsters project)

	- Combine the PHP and the Style tile ideas
		- outline the monsters and get them into Objects
		- put those objects into an Array
		- loop through them 

- How for each works:			
		

		<?php
            $fruit = ["apple ", "banana ", "carrot ", "diakon ", "eggplant "];

			//  for each thing inside of fruit do as this codeblock says
			foreach ($fruit as $f)
				echo $f;
		?>

---------------------------------------------------------------------------
## 1/1/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [] Edit Ticktick
- [] Milestones
- [] goals page
- [x] review php and/or arrays
- [] check in on github

#### Array Review Notes: "<p> // the right side operators will happen first. So the total on the right are parsed by the parser first? Why is is the right side first?</p>
	- Derrick says to think of it as how javascrip works:
		- Doing stuff to get it ready 
		- Creates the reference 
	- then pointing the reference to the new value.
	- that's how it works in Javascript, even if that's not how it works in PHP
	- Why isn't a semicolon required after the curly brackets?

#### Notes for standup tomorrow:
- worked on assessability issues with live captions and playback speed.
-- Substital allows to increase speed for vimeo playback
-- Mac built in live captioning allows you to change the window size and text size, so I can have one line of text and a large font. It's much easier to read and way less distracting this way.
- Worked on reviewing PHP lesson on array because I am confused on a few issues since I skipped this video. 
	--- questions: Why isn't a semicolon required after the curly brackets?"
- Installed php syntax checker
- found that I did not actually have php installed due to the error: "/bn/sh: php: command not found"
- discovered I did not have php installed? and did not have developer tools installed
- So I installed developer tools with homebrew
- installed php 
---------------------------------------------------------------------------
## 12/20/22

- [x] Set Up Journal Entry
- [x] Stand Up

---------------------------------------------------------------------------
## 12/16/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Milestones
- [] goals page
- [x] lesson 96/97
- [] check in on github

#### Goals
- Gather all of the visual language ideas for your personal website
- Have some conversation about your choices and see what is working
- Figure out what visual assets or help that you need
- Get ready to put the code into place


#### questions

What mood you are going for and why?
- Alina is an creative web dev who can bring professional layout with an air of humor and whimsy

What content do I need?
-

What font or font pair helps evoke that?
What colors would help?
Should I use any graphics?
What visual tricks would lend themselves to this story?
How will the site change and grow?
Will there be more than one page at this stage?
How can I measure if this design is successful?

### video notes



#### yesterday's highlights: 
- 
---------------------------------------------------------------------------
## 12/15/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Milestones
- [] goals page
- [x] lesson 95
- [] check in on github

#### icon game plan:
- Goals: 
 - what should the user think and feel?
 - what asthetic language tools will achieve that?
	
- Timeline:
	- hours:
		[x] .5: research each image set
		[x]	(break to walk Lobita)
		[x]	1: define common visual themes and make quick sketches by hand
		[x]	2: craft first two icons and establish visual language/style
		[x]	2.5 reuse similar shapes
		[x]	3: finish

#### yesterday's highlights: 
- After thinking about it, realized how important it is to have a cohesive design goal or “words” at the start of the project. My fine art classes really drilled into us to develop the concepts through the process of painting. However, with design that definitely slows you down and can make for a discordant design.
- There are a lot of cool affinity designer brushes for purchase.

---------------------------------------------------------------------------
## 12/14/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Milestones
- [] goals page
- [x] lesson 94
- [] check in on github

#### store tile game plan:
- Goals: 
	- Show the products
	- Look cool and avant guard
	- portal for more information for those who need it
	- impulse purchase for those who dont
- Hour 1
	- [x] 30 mins looking at ecommerce sites and taking screen shots
		- [x]phone appearance
		- [x]tablet appearance
		- [x]desktop appearance
	- [x] 30 mins making a mood board of favorite parts (50 mins)
- Hour 2-3
 	- 20 minutes generating sections on a stile tile to include all needed content
 	- 1.5 hours making the style tile

#### yesterday's highlights: 
- Don't forget about bitmap mode in affinity designer
- Sketching in procreate then creating a vector in affinity designer is easier than trying to fix a fully rendered drawing.
- "Have back up methods for bad drawing days"

---------------------------------------------------------------------------
## 12/12/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [] Milestones

#### one hightlight in the last lesson: 
 Worked on writing up a poster imitation via grid. Setting heights for elements is important. I'm not sure how to keep my BAUHAUS title in line with the text underneath and have it be responsive.

 #### today's goals: 
- Post a blog post
- Style Tiles

#### today's highlights: 
- Chat with Jess about blog posts:
	- just write out lists and build off of that.
	- "My best english teacher told me that spelling doesnt matter and grammar doesnt matter- just make your point."
	- So be selfish and make it for you! Ivy also said to remember that you can edit and delete anything.

---------------------------------------------------------------------------
## 12/8/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [] Milestones

#### one hightlight in the last lesson: 
 - I explored the lowercase a as a tool to format layouts and incididentally formed some cool logo options for myself.

 #### today's goals: 
 - catch up on all text messages!
 - finish yesterdays lesson and todays lesson
 - finish blog post draft and ask emily to take a look
 - get a large bag for andre's gift


#### today's highlights: 
 - Flush left is safe
 - Use one typeface until you know it well
 - Skip a weight so use bold and light, go for greater contrasts
 - double point sizes generally between different elements types
 - align to one axis: 
 	- Vertical: align to left of type
 	- Horizontal: strongest horizontal element
 - Use any typeface you like as long as it’s one of the following:
		Akzidenz Grotesk, Avenir, Avant Garde, Baskerville,
		Bembo, Bodoni, Bookman, Caslon, Century, Clarendon,
		Courier, DIN, Franklin Gothic, Frutiger, Futura,
		Garamond, Gill Sans, Gotham, Helvetica, Letter Gothic,
		Memphis, Meta, Mrs. Eaves, OCRB, Rockwell, Sabon,
		Times New Roman, Trade Gothic, Trajan and Univers.
- Group relared blocks of information to help visually organize information
- Avoid corners unless intentional
- Spacing matters. The closer things are together, the more the reader will
assume a relationship exists between separate blocks of information. 
- Avoid rags with shapes. The shape will be stronger than the information.
- No orphan words at the end of paragraphs.
- Be bold or italic,never regular
- Relax, It’s Just Type



---------------------------------------------------------------------------
## 12/2/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [] Milestones

#### one thing I learned yesterday: 
 - when you request a php file with <?php include("filename.php")? it tells the server to run the program (index.html for example). The server will compile all the php requests into html files and serve that back to the browser.

## prep for consolidation meeting notes:

### Reflections:

##### Which little mini projects have resonated with you and you like to flesh out a bit more?? 
 - the responsive website as a humorous burn out resource
 - svg cat
 - mock client but a different subject

##### Which areas are you feeling most attracted to? 
 - svgs right now 
 - I'd really like to go back and make a choose your own adventure. 
 

#### Known weak points:
- writing blog posts
- anything networking
- flex concepts:
	- flex-basis
	- flex-wrap
	- flex-grow 
- time allocation - hyperfocus vs distracted 
- planning out projects accurately
- github
	- how to ensure it's up to date

#### Goals
- I would love to turn an "html adventure" into a narrative svg mini-game. 
- Creae a website with my friends occupational therapy business


---------------------------------------------------------------------------

## 12/1/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Milestones

#### one thing I learned yesterday: 
 - Image children will break a div if the div has a max-height set. 
 - Use rubberducking before asking questions in stoackoverflow

#### Highlights: 
 - <?php include ('filename.php') ?> allows for breaking up html code into seperate files for webpages. It also makes parts of pages that are ubiquitus throughout a website be editedable from one location. This code needs to be placed in the correct location within the document flow.
 - /*  * / and // both allow for comments within php. 

#### known weakpoints:
- flex-basis
- flex-wrap
- flex-grow 
---------------------------------------------------------------------------
## 11/28/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Milestones
- [] Study Hall
- [] Features

#### one thing I learned yesterday: 
	“&nbsp;” will add a non breakable space in the html. It worked well for my title but according to Derrick, "it can come back to haunt you later."

#### 30 minutes blog draft	
Back in september we were introduced to svgs. Wait hold on, SEPTEMBER?! It's been that long? The months are flying by. I feel like I am still at the begining of all this, how it's already almost December? Ok, back to the subject at hand, SVGs. SVG stands for scalable vector graphics, or basically graphics that can infinitely scale in size. Back in college, all my courses referred to these types of files as vector graphics, so only the extention and our current use-case were new to me. Vector or SVG graphics are made of numbers typically using points and paths. The paths are tethers between the points, so drag the points to new places and the whole line or shape changes. Because this kind of graphic is calculated numerically this way, no information is lost as the graphic is scaled upwards in size. Bitmap images (think photos from your phone) only have so much data they can work with, if you scale up the image, the software has to make it up and depending on how that's done it often distorts the image. 

For webdesign the numberical calculation of svgs is really handy, since you can pop it into the code of the page, edit that code so the the user can interact with the image or add extra flair to the page. It also makes the website load much faster since the amount of data is far smaller than a typical png or jpg. While, I know that's why the usecase is important, the previous point is what intrigues me. The abiliity to make a doodle wiggle, change color, move and become an animation is very compelling. Ages ago, I was an animation major for a hot second, but my undiagnosed ADHD got in the way and I switched paths. During the SVG lessons, I found myself obsessed with all the posibilities of how I could make a drawing move, change in size, rotate, etc. Suddenly, I was an animation student again, but I was actually enjoying it. The partnertship of drawing then writing a little string of text was delightful, rather than drawing out each individual frame. It allows for freedom of quick discovery, or for an unoptimized line of code to suprise you with it's results. The point of the lesson wasn't animation, so I larely ended up in a distraction of a rabbit hole.

Creating SVGs in affinity designer and editing their code has been my favorite thing by far so far. 

After you create your vector in Affinity designer, export your file as an svg. Then you can open that file in a text editor like sublime. Remove the docutype, version, xmls:space, xmls:xlink, and xmlns:serif as they are not necissicary. The styles can be removed and transfered to your css file. ID tags can be changed to classes for styling, since we are encouraged to style only with classes. The G tag is an svg version of a div, and the g transform is where the path is on the x/y axis. I'm sure that can also be transfered to css, but I'm not quite comfortable with that yet. Rect is a rectangle.

I have had a few issues with how I create my vectors where I end up needing to reopen the svg file I have edited, and remove a bunch of hidden groupings. That way the code is much simpler than I was getting with my initial creations. 

Have you had the chance to play around with SVGs? Do you prefer to use them or just sticking with bitmap (png/jpg) images? Why or why not? 

---------------------------------------------------------------------------

## 11/19/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [] Lesson 68
- [] Lesson 69
- [] Milestones
- [] Study Hall
- [] Features

#### highlights
### questions
---------------------------------------------------------------------------


## 11/18/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Lesson 66
- [] Milestones
- [] Study Hall
- [] Features
- [x] Case Study

#### highlights
Flexbox  summary:
	- display flex applies to children
	- flex direction: row, column, column-reverse, row-reverse
	- justify-content: flex-start, center, flex-end, space-around, space-between
	- align-items: stretch, start, row, end, flex-start, flex-end
Custom elements are default inline.
### questions
- Flex-wrap is a little confusing.
### note to self
	- stop choosing extra hard exercises! They take too long and I need to catch up.
---------------------------------------------------------------------------
## 11/10/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [x] Lesson 60
- [] Milestones
	- github milestone
- [] Study Hall
- [] Features

#### highlights

- learned about SVGs.
	- name the layers in AF so those paths have names in the css
	- change ids to classes
	- remove the style settings in the html

- I made a little angry cat in codepen. 
	- I couldn't figure out how to make the transition smooth for hover animation when the cursor left the image.
	- I settled for using used a continuous animaton to blend with the hover and that worked well enough.

### todos

- I still need to finish my casestudy!

### questions
- How to make a transition for a hover animation when the cursor leaves the frame?
- I need to know more about axis and transform.
- what folder am I supposed to sync with github?
-------------------------------------------------


## 11/1/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Ticktick
- [] Lesson 57
- [x] Lesson 50
- [] Milestones
- [] Study Hall
- [] Features

#### highlights

I don't know inline/block elements very well. I need a cheat sheet. 


### questions
-------------------------------------------------

## 11//22

- [x] Set Up Journal Entry
- [x] Stand Up
	- [x] Check yesterday's stand up to do list
- [x] Edit Checklist
- [] Lesson 51
- [x] Lesson 50
- [] Milestones
- [] Study Hall
- [] Features

#### highlights

I don't know inline/block elements very well. I need a cheat sheet. 


### questions


-------------------------------------------------

## 10/29-30/22

### highlights

Font quick guide:
	line-length: 50-70 characters or 2-3 alphabets
	font-size
		body: 17-23px (can change per font)
		title: 1 line maybe 2
		want to feel like a printed page held at reading distance
	line-height: 
		value: px
		longer lines need more line height
	paragraph-spacing
		more than 0
		less than line height
		px
		spacing between groups > than within groups
	title fonts
		strongly branded and can sacrifice legibility
	accent
		decorative
		slub
		match brand
	SLUB: smaller lighter uppercase bold
	body font
		should hint at brand
		legible above all else


### questions

What are the best practices for resizing a background image?
How would you center anything ?
-------------------------------------------------


-------------------------------------------------

## 10/12/22

- [x] Set Up Journal Entry
- [] Stand Up
	- [] Check yesterday's stand up to do list
- [x] Edit Checklist
- [] Lesson 45
- [x] Lesson 44
- [] Milestones
- [] Study Hall
- [] Features
- [] 30 Mins Substack

#### highlights


### questions

- is there best practices for managing hex and rgb codes in a html/css file?
-------------------------------------------------

## 10/18/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [] Edit Checklist
- [] Lesson
- [] Milestones
- [] Study Hall
- [] Features
- [] 30 Mins Substack

#### highlights


### questions

- is the difference between section and div semantics only?

Assignments:
Thursday: no feedback required

Friday:
https://codepen.io/thealinamichelle/pen/YzLoGBe
There is a certain point where I can't figure out what normal font looks like anymore. How far apart should words be, how tall are line heights usually, how far apart are letters? By the end of this exercise I really struggled to know if my article looked "good" or not. Good type seems like it's something you don't notice, but bad type is easy to see. I'm also struggle to know when margin-left: auto and margin-right: auto is the right tool. My article was stuck to the left forever and I'm not sure what finally allowed me to to center the whole thing. I was also super mentally fried while working on this and problem solving getting it to center was the final step. 


Saturday:

-------------------------------------------------

## 10/18/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Checklist
- [x] Lesson
- [x] Milestones
- [x] Study Hall
- [x] Features
- [x] 30 Mins Substack

### stand up

#### Yesterday: 
I learned more about the div element, about the in-block and block attributes. 
I signed up for CodePen and spent time playing around div, inlike and block. 
I had a meeting with Derek and learned some really cool stuff about 
	- the hover/transition time (and delay), 
	- clamp() attributes, 
	- @media queries and using 
	- em for button padding, 
	- nav is technically a grouping of inline elements 
	- and that sections and divs can have an id name
	- I wrote a substack post to which my husband kindly gave the feed back "There's an unmistakeable voice in writing where you feel that something is an *assignment*". Well ok, I'll do better next time. 😭

#### Blockers, Confusing Points

- Is there a difference between ```div class=``` vs ```div id=```?
- I just have a crazy amount of stuff to do this week. I got this!

#### Today
- Onto iframes!


### Tomorrow's Post:

####
Styling in Affinity Designer:
there is a part of me that get's frustrated that it's so complicated and part of me loves how much control I have. Also if you click the A tool twice you get the paragraph tool. If tou go to text > insert filler text, there is a built in lorem ipsum. 

Font Styling:
Even with taking notes it's hard to remember all the attributes for the fonts and easy to get lost among all the x + x elements. 
https://codepen.io/thealinamichelle/pen/VwxOxEX?editors=0100

I haven't built my goals page or resume. It feels so early to start that...I will probably start next week once I am not cramming everything into a single day.


### questions


-------------------------------------------------

## 10/17/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Checklist
- [x] Lesson
- [x] Milestones
- [x] Study Hall
- [x] Features
- [x] 30 Mins Substack


### highlights

- Div stands for divider block
- Display: inline-block can allow inline elements to behave and use attributes from block elements.
- Signed up for CodePen
- block vs inline vs inline-block (images are inline-block by default)
- Learned about hover/transition time (and delay), clamp() attributes.
- @media query to query for viewport size
- Other em uses are button padding, to help size items for different displays.
- How to select nav only items use: nav a { ... 
- You can identify a sectin with an ``` <section id="name"> Name information </section>```
- I did it!  I wrote the second substack post!

-------------------------------------------------

## 10/13/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Checklist
- [x] Lesson
- [x] Milestones
- [x] Study Hall
- [x] Features
- [x] 30 Mins Substack

### stand up

#### Yesterday: 
- [x] I explored Affinity Designer. I saw the project initially more as exploring the program rather than making a competent meta-image. I was very impressed with the designs everyone came up with! 
- [] Jake was kind enough to make a git and transmit video for me. I only watched about half of it before deciding I should prioritize getting into Affinity Designer.
- I downloaded Divvy, and set up a shortcut but found the program to be a little clunky. I’ve been using Magnet which places windows similar to the way Windows does and will probably continue to do so. However, Divvy seems is easier for smaller divisions.

#### Blockers, Confusing Points
 - I need to spend more time reading the metadata articles. I want to have a better grasp of why that code is written in that format. I am uncomfortable using OPG to generate the meta tags for me.
 - Slack keeps giving me an unread thread notification but when I click “threads”, I can’t determine what thread is considered unread.

#### Today
- Besides the goal of the lesson, I want to better integrate looking for visual inspiration into my day. I took a note from Hjalmar and decided to habit stack it as part of my PE starting/ending routine. 
- I want to take some time and make a better metadata image. 

### In Real Life Project Ideas:


- A little web dog walk choice adventure game (from the dog’s point of view)
- A little colorful web game about fear-free dog grooming
- Random Interval Timer with difficulty level (for use for ABA animal training and research)
- Invoice and receipt builder generated using google calendar events as the main data input.
- Calm simple visual web game (goal is to fall asleep)
- My Occupational Therapist friend’s logo/card/website


### highlights

- worked in gradiants in Affinity Designer
- realized I have actually collected some visual inspiration. 
- took some time for myself this afternoon since I was bordering on a emotional meltdown. I exercised, did a very long run, took a shower and made myself dinner. Those acts of self care did a lot for my emotional state and I am feeling much better.
- I worked on my FTP HTTP substack post. I'm not quite done, but I can wrap it up tomorrow. 

### questions

- [] Best practices for retrieving past stages from Git
- [] How does HTTP, HTTPS, POP3, IMAP, SMPT actually all differ?
- [] I need to know more about the meta tags to understand them. I am uncomfortable using OPG to generate the meta tags for me. I am not sure which part of my tag ultimately made my image pop up in Slack. 


---------------------------------------------------------------------------


## 10/11/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Checklist based on 
	- [x] Lesson
	- [x] Milestones
- [x] Create JPG, SVG, PNG
- [x] Create meta data share image
- [x] add new site and meta image to slack
- [x] Milestones
- [x] Study Hall
- [x] Features
- [] 30 Mins Substack

### standup

	####Yesterday: I spent time enjoying chrome dev tools, changing the code in Jess's site, and thinking about realizing I usually have the mindset I am writing files or code for myself rather than ensuring someone else could easily understand it and pick up where I left off. 

	####Blockers/Confusing Points:
	I am looking forward to the huddle with Jake and Drew about puting git onto the server. I don't understand how git will work with group files yet but I am looking forward to learning how it's done. 

	####Today's Goals
	I am very excited for affinity designer! I am super excited to explore this program today. 

### highlights

- Today we were exposed to infinity designer. It's a fairly intuitive little tool, but learning new tools definitely bumps up against my impatience resilience when I have a deadline. I need to work on that. 
- I crated a little dog logo and it's now the meta image for my index page.
- Current Standard sharing size is 1200 x 630 at 72dpi.
- A rule of thumb would be to make sure the artboard is double  the size that the end graphic will be displayed as. This will take into account future advancements and retina screens, unless svg.

### questions or blockers

- [] I need to know more about the meta tags to understand them. I am uncomfortable using OPG to generate the meta tags for me. I am not sure which part of my tag ultimately made my image pop up in Slack. 


-------------------------------------------------

## 10/11/22

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] Edit Checklist based on 
	- [x] Lesson
	- [x] Milestones
- [x] Lesson
- [x] Milestones
- [x] Study Hall
- [x] Features
- [] 30 Mins Substack

### Today I learned

- Today I learned how to better navigate chrome dev tools in order to explore the code of other developers.
- Lighthouse Analysis
- Facebook Debugger

- Meta Data is the data that provides information about other data. 
	- Descriptive Meta Data allows webcrawlers to display informative snippits when that content is shared. Well crafted meta data draws in more users and informs them what your website or content has to offer. 

- **Wikipedia breaks up meta data into these categories:**
>*Descriptive metadata* – the descriptive information about a resource. It is used for discovery and identification. It includes elements such as title, abstract, author, and keywords.
*Structural metadata* – metadata about containers of data and indicates how compound objects are put together, for example, how pages are ordered to form chapters. It describes the types, versions, relationships, and other characteristics of digital materials.
*Administrative metadata* – the information to help manage a resource, like resource type, permissions, and when and how it was created.
*Reference metadata* – the information about the contents and quality of statistical data.
*Statistical metadata, also called process data,* may describe processes that collect, process, or produce statistical data.
*Legal metadata* – provides information about the creator, copyright holder, and public licensing, if provided.

### Highlights

- Web crawlers are applications that download webpages to record their content and how they are connected
- HTTPS stands for hypertext transfer protocol, is more secure than HTTP, and the current standard protocol.
- Chrome DevTools: cmd+option+i 


### questions

- [ ] Best practices for retrieving past stages from Git
- [ ] How does HTTP, HTTPS, POP3, IMAP, SMPT actually all differ?

## conclusion

- Well crafted Meta Data is extremely important to ensure your content has reach. It is often a user's first impression and will determine if they click on. It also determines whether your site is determined to be safe, can access the required character set and other important pieces of information.

---------------------------------------------------------------------------

## 10/10/22

### Today's Goals

- [x] Meet with Derek
- [x] Write Up a Daily Checklist
- [x] Read about noopener noreferrer links
- [x] Commit Project files in Git
- [x] Link project in PE Server Site
- [x] Rename Home
- [x] Explain your FTP experience in slack
- [x] Practice Typing
- [] Milestone
	- [] Blog Post: Explain your understanding of HTTP and FTP and what you know so far about building websites. 
- [x] Look at everyone elses code

### questions

- [ ] How to git commit files in the PE server?

### Today I learned

Rubber duck debugging - it can be helpful to explain an issue to a friend or an object to solve a problem. This is how I was able to follow the terminal exercises. I wrote down my questions as if I was speaking to a fictional person. 

Today's asked how can we start pair programming today? I'm not sure yet! I guess I can ask if anyone wants to make a site for fun together. 

In html padding denotes the space around objects. 
The brains wants to read an average of 14 words per line. 

I really need to take more screenshots. I don't seem to find many websites I like very often. I also don't seem to come across novel websites as often as I used to. 

I learned a better way to link to local images. I was over thinking the file path prior and since my png file is in the same folder as my web-portal all I needed was ".gownron."

I also learned that "../" can indicate to link to the file in the parent folder. 

The rel attribute sets the relationship between your page and the linked url.  "noopener noreferrer" prevents tabnabbing. It basically prevents your link from connecting to a fake login page. 


## conclusion
I think I am starting to have a better grasp of how to get through all the PE materials. I am really appreciating this catch up day and how much easier it is to type with reading glasses on! There are a lot of small things I've missed or haven't been able to interanalize until meeting with a classmate or Derrek. I need to remember that meetings are always helpful! I found better ways to organize and link to my files today, spent some time slowly reading about html questions I had, and spent time organizing the best way to structure my learning days.

---------------------------------------------------------------------------


