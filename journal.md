# My learning journal
### This is my learning journal for personal use. It keeps track of my daily goals, notes any unique learning concepts, and any questions I come up with, first drafts for blog content, or brief exercises for PE prompts.

##7/10
-
Summary: GIT & Node review, intro to Express:

#### GIT REVIEW
- initialiaze git
- git init
- git ignore - add files to ignore
	.DS_Store
	node_modules

- `git status` will show the currtent status
- `git add *` will add all the files to the commit
- `git add .gitignore` will specifically add the ignore file

- `git commit -m "Add initial files"` to add the initial description message

- `git log` will show you the log of commits


npm initialize
#### INITIALIZE EXPRESS
#### how to add node to a project//initialiaze node

npm initialize
	npm init

- look into alias for the terminal

in the  package json add the script

	"start": "node app.js"

frameworks for node.js - hapi.dev  and koajs.com

express is one of the first and will help understand other frameworks

npm install express will add to the dependencies 

		(  "dependencies": {
		    "express": "^4.18.2"
		  })

- how it looks as a dev dependency

		`(  "devDependencies": {
		    "express": "^4.18.2"
		  })`

if there are every any issues, you can delete the nodemodules and enter into the terminal
npm install 
and it will install everything in the dependecies in the json


### IMPORT EXPRESS

	import express from "express";
because it is a nodemodule it will naturally import you don't need to point to the path

//INITIALIZE EXPRESS
		
		const app = express();


### SET UP ROUTING

express lets you combine response and request into and it infers the content type it is and the status code
	
	response.send("SENDING");


	app.get('/', function(request, response){
	response.send("SENDING");
	});
get request towards this root, expects a request and response

#### SET UP APP TO LISTEN FOR EXPRESS

		app.listen(1982);



- REMINDER - IMPORT MODULES IN THE JSON

- `"type" : "module";`
- if you use ECMA and don't set the type as a module you'll get this error SyntaxError: Cannot use import statement outside a module

#### How to add nodemon?
	under scripts add `"name for script like 'watch'":"nodemon filename"`


#### How do we handle all the http requests for the things within pages or handle defaults like the favicon issue?\

create a public folder first I guess `terminal mkdir public`

from the Express documentation: 

>*Serving static files in Express*
To serve static files such as images, CSS files, and JavaScript files, use the express.static built-in middleware function in Express.

>For example, use the following code to serve images, CSS files, and JavaScript files in a directory named public:`app.use(express.static('public'))`

>Now, you can load the files that are in the public directory:
http://localhost:3000/images/kitten.jpg
http://localhost:3000/css/style.css
http://localhost:3000/js/app.js
http://localhost:3000/images/bg.png
http://localhost:3000/hello.html



>How do I handle 404 responses?
In Express, 404 responses are not the result of an error, so the error-handler middleware will not capture them. This behavior is because a 404 response simply indicates the absence of additional work to do; in other words, Express has executed all middleware functions and routes, and found that none of them responded. All you need to do is add a middleware function at the very bottom of the stack (below all other functions) to handle a 404 response:

		app.use((req, res, next) => {
		  res.status(404).send("Sorry can't find that!")
		})





use method (see express documentation)
shows different use cases and how to add subfolders etc etc



#### TEMPLATING LANGUAGES

with PHP you have a build in templating language but with node you can pick the templating language

(derrick likes handlebars)
EJS 

- INSTALL: npm install ejs

EJS Can be used anywhere not just express

- Tags: 
><% 'Scriptlet' tag, for control-flow, no output
<%_ ‘Whitespace Slurping’ Scriptlet tag, strips all whitespace before it
<%= Outputs the value into the template (HTML escaped)
<%- Outputs the unescaped value into the template
<%# Comment tag, no execution, no output
<%% Outputs a literal '<%'
%> Plain ending tag
-%> Trim-mode ('newline slurp') tag, trims following newline
\_%>"Whitespace Slurping" ending tag, removes all whitespace after it. Note: No backslash that is just 
for markdown


- SET UP THE VIEW ENGINE

	`//set up EJS view engine
		app.set('view engine', 'ejs');`

- SAVE FILES AS .EJS
- RESPONSE.RENDER
	doesn't use an actual file path, but knows where to find the file behind the scenes?

	the render method is smart and will look for whatever changes in the "views" folder

	`app.get('/', function(request, response){
			response.render('home');
		});`
- Dynatmic Data

will take an object

	`app.get('/', function(request, response){
			response.render('home', {pageName: "the home page brought you by the view engine"},);
		});`

echo it on the actual page:  <h1><%= pageName %></h1>


#### QUESTIONS:

- JSON DATA NOT WORKING??
terminal mkdir public (???)






























##6/29
-


### Notes: 

*Dockblock is a specifically formatted comment in source code to document a specific segment of code*

wiki article: 
these are comments but something is going to have to read them to turn them into nice looking documentation

good documentation:
whole comment structure for all your functions for example

### 


## 6/20-21
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones
- [] Review Ticktick list

- Personal Website:
- - [] make an itemized timeline

- Node day 4 []

### Video Notes

- 
immediately invoke function expression

anonymous function 
function()


.push(array) will add an item to an array at the end

node index.js will run the index file 
```js

`__dirname` will grab the directory name
`__filename` will grab the file name

````
Node functions are local rather than global

Node modoules have these built in:
```js
			console.log('e', exports);
			console.log('r', require);
			console.log('m', module);
			console.log('d', __dirname);
			console.log('f', __filename);

			const something = require('./module.js');

//in the module.js file:

		function something(){
			console.log("something");
		}
		
		module.exports = something;

```
ECMAScript modules are the official standard format to package JavaScript code for reuse. Modules are defined using a variety of import and export statements.

here is the above example using the ECMA standard:
```js

//instead of:

		const something = require('./module.js');

//it's:

		import something from './module.js';
		something();

//and in the module.ks file:

		function something(){
			console.log("something");
		}
		export default something;

```


it can work outside of the browser
npm init in the terminal for a package.json file
npm start vs node index.js both start the node module. 



get the firectory name and file name




--- 

## 4/10 
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones
- Personal Website:
- - [] Layouts for modules
- - [] finish layout plans
- To Do App: 
- - [] review video

### Video Notes
- verb think function



immediately invoked function expression

---

## 3/27
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- [] finish layout plans

```Javascript

const todos = [];//a place in memory for the todos with a reference

console.log('todos: ', todos);

function add(todo) {//this function will take a todo and add it to the list we have in memory
	todos.push(todo);
}

add("Go to the store");//this is the function above
console.log('todos: ', todos);
add('prepare dinner');
console.log('todos: ', todos);
add('go to bed');
console.log('todos: ', todos);
add("Add Cake's walk to the calendar");
console.log('todos: ', todos);

//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/splice
function remove(id) {
	todos.splice(id, 1)//start, end
};//read the index number and remove one thing only. Changing the number to 2 removes two list items starting at the index number. Derrick doesn't like this method but its a classic.

remove(0);
console.log('todos: ', todos);
// remove(3);
// console.log('todos: ', todos);

```



### Common JS interface tricks

You can toggle a class with element.classList.toggle('className')

## 3/some date after the 10th
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- [] finish layout plans

### Common JS interface tricks

You can toggle a class with element.classList.toggle('className')


## 3/some date after the 10th
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- [] finish layout plans

### 180 For Each and More

```javascript

((
//Miguel's function:

		function renderItem(item, index) {
			var listItem = document.createElement("li");
			listItem.textContent = "array slot " + index + ": " + item;
			listItem.classList.add("item");
			document.body.appendChild(listItem);
		}


		exampleArray.forEach(renderItem);
))

```

create a javascript file
scripts.js

in the html file: <script src='scripts.js'></script>


Function outide of the For Each Loop:

```javascript

		function printItem(item, i, array){
			var number = i + 1;
			console.log(number + ": " + item);
		};


		deskItems.forEach(printItem);

Function within the for each loop

		deskItems.forEach( function printItem(item, i, array){
			var number = i + 1;
			console.log(number + ": " + item);
		});
```

```javascript 

They will produce the same results!


deskItems.forEach( function(item) {


//if item is ceramic put it on the list

 if (item.type != "easily lost") {
 	console.log(item.name)
	 }
 });
```

var exampleItem =
		{
			name:"water bottle", 
			type:"reusable"
		};
 
var deskItems = [
		{
			name:"water bottle", 
			type:"reusable"
		},
		{
			name:"timer", 
			type:"handy"
		},
		{
			name:"pens", 
			type:"handy"
		},
		{
			name:"papers",
			type:"trash"
		},
		{
			name:"cup", 
			type:"reusable"
		},
		{
			name:"fidget toys",
			type:"handy"
		},
				{
			name:"tissues",
			type:"trash"
		},
		{
			name:"old notes",
			type:"trash"
		},		
		{
			name:"scissors",
			type:"handy"
		},
		{
			name:"keys",
			type:"essential"
		}
	];


// function printItem(item){
// 	console.log(item.name);
// 	console.log(item.type);
// };


// deskItems.forEach( function(item) {


// //if item is ceramic put it on the list

//  if (item.type != "easily lost") {
//  	console.log(item.name)
// 	 }
//  });

var trash = deskItems.filter( 

	function(item) {
	return item.type == "trash";


});

var handy = deskItems.filter( function(item) {
	return item.type == "handy";
});

var essential = deskItems.filter( function(item) {
	return item.type == "essential";
});

var reusable = deskItems.filter( function(item) {
	return item.type == "reusable";
});



function buildListSection(items, heading) {

		var h2 = document.createElement('h2');
		h2.textContent = heading;
		document.body.appendChild(h2);

		var ol = document.createElement('ol');

		items.forEach( function(item) {
			var li = document.createElement('li');
			li.textContent = item.name;
			ol.appendChild(li);

			document.body.appendChild(ol);
		});
	};


buildListSection( trash, "things Alina needs to throw away.");
buildListSection( reusable, "Awesome reusable tools");

buildListSection( essential, "Can't leave the studio without it!");




### TESTING

#### Array.from
- questions - does Array always need to be capitalized? I thought at first array was a stand in term for the array reference but that doesn't seem to work
- pulls out 
- Array.from() lets you create Arrays from:
- - iterable objects (objects such as Map and Set); or, if the object is not iterable,
- - array-like objects (objects with a length property and indexed elements).

example: 
	input: `console.log(Array.from("hello"));`
	output: `(5)['h', 'e', 'l', 'l', 'o']`


#### Array.isArray()
- verified if called object is an array or not
	input: `console.log(Array.from("hello"));`
	output: false

		input: `var hello = Array.from("hello");
				console.log(Array.isArray(hello));
				console.log(hello);`

		output: true 
				`(5)['h', 'e', 'l', 'l', 'o']`

#### array.push
- unlike the other methods this one the array is a stand in term
- The push() method adds one or more elements to the end of an array and returns the new length of the array.

	input: `var deskItems = ["water bottles", "timer"];
			console.log(deskItems.push("eye drops"));`
	output: 
	`		(3) ['water bottles', 'timer', 'eye drops']
			0: "water bottles"
			1: "timer"
			2: "eye drops"
			length: 3
			[[Prototype]]: Array(0)`

#### array.shift 
- The shift() method removes the first element from an array and returns that removed element. This method changes the length of the array.

	Input: `var testItems = ["water bottles", "timer"];
			console.log(testItems.shift());
			console.log(testItems);`

	Output:
			`> "water bottles"
			> Array ["timer"]`

#### array.join()
- The join() method creates and returns a new string by concatenating all of the elements in an array (or an array-like object), separated by commas or a specified separator string. If the array has only one item, then that item will be returned without using the separator.

- Input:

		`var testItems = ["water bottles", "timer", "cup", "notes"];`

		`console.log(testItems.join(' '));
		console.log(testItems.join('-'));
		console.log(testItems.join('and'));`

- Output: 

		`"water bottles timer cup notes"
		"water bottles-timer-cup-notes"
		"water bottlesandtimerandcupandnotes"`

#### array.reverse()
- The reverse() method reverses an array in place and returns the reference to the same array, the first array element now becoming the last, and the last array element becoming the first. In other words, elements order in the array will be turned towards the direction opposite to that previously stated.
- Careful: reverse is destructive -- it changes the original array.

Input: 

		var testItems = ["water bottles", "timer", "cup", "notes"];

		console.log(testItems);
		console.log(testItems.reverse());
		console.log("changed: " + testItems);

OutPut

		> Array ["water bottles", "timer", "cup", "notes"]
		> Array ["notes", "cup", "timer", "water bottles"]
		> "changed: notes,cup,timer,water bottles"

#### array.find

- The find() method returns the first element in the provided array that satisfies the provided testing function. If no values satisfy the testing function, undefined is returned.
- return the first element

- requires a function why?


- Input: 
```javascript
	var deskItems = [
			{
				name:"water bottle", 
				type:"reusable"
			},
			{
				name:"papers",
				type:"trash"
			},
			{
				name:"pens", 
				type:"handy"
			},
			{
				name:"timer", 
				type:"trash"
			},

			function isTrash (item) {
			return item.type === 'trash';
			};

			console.log(deskItems.find(isTrash));
```

- Output: 
		{name: 'papers', type: 'trash'}


#### array.map

- The map() method creates a new array populated with the results of calling a provided function on every element in the calling array.

INPUT:

		const characters = [
		    {
		        name: 'Luke Skywalker',
		        height: 172,
		        mass: 77,
		        eye_color: 'blue',
		        gender: 'male',
		    },
		    {
		        name: 'Darth Vader',
		        height: 202,
		        mass: 136,
		        eye_color: 'yellow',
		        gender: 'male',
		    },
		    {
		        name: 'Leia Organa',
		        height: 150,
		        mass: 49,
		        eye_color: 'brown',
		        gender: 'female',
		    },
		    {
		        name: 'Anakin Skywalker',
		        height: 188,
		        mass: 84,
		        eye_color: 'blue',
		        gender: 'male',
		    },
		];

		const names = characters.map(character => {
			return character.name;
		});

		console.log(names);


OUTPUT:

		['Luke Skywalker', 'Darth Vader', 'Leia Organa', 'Anakin Skywalker']


- -  Input can be written this way as well (implicit return): 

		`const names = characters.map(character => character.name);`
//map over each character and convert it to name

- - Get the name and the height:

		`const smallRecord = characters.map(character => 
			({name: character.name, height: character.height
		}));` //this is an implicit return but because we are returning an object we need to wrap it
		
		`console.log(smallRecord);`


- - BONUS .split

		`const firstname = characters.map(character => character.name.split(" ")[0])`

		`console.log(firstname);`

- - - output: 'Luke', 'Darth', 'Leia', 'Anakin']

#### Array.reduce

- From MDN: 
- - The reduce() method executes a user-supplied "reducer" callback function on each element of the array, in order, passing in the return value from the calculation on the preceding element. The final result of running the reducer across all elements of the array is a single value.The first time that the callback is run there is no "return value of the previous calculation". If supplied, an initial value may be used in its place. Otherwise the array element at index 0 is used as the initial value and iteration starts from the next element (index 1 instead of index 0).
Perhaps the easiest-to-understand case for reduce() is to return the sum of all the elements in an array:

MDN INPUT:

		const array1 = [1, 2, 3, 4];

		// 0 + 1 + 2 + 3 + 4
		const initialValue = 0;
		const sumWithInitial = array1.reduce(
		  (accumulator, currentValue) => accumulator + currentValue,
		  initialValue
		);

		console.log(sumWithInitial);
		// Expected output: 10


MDN OUTPUT

		>10


- So it does something with accumilating all the items within the array but also takes a currentvalue?

##### SYNTAX

`reduce((accumulator, currentValue, currentIndex, array) => { /* … */ })`


// Callback function

		reduce(callbackFn)
		reduce(callbackFn, initialValue)


- - using the characters array: 

		const totalMass = characters.reduce((accumulator, currentValue) => {
		    return accumulator + currentValue.mass;
		}, 0);

		console.log(totalMass);

		This returns: 346


## 3/10
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- [] finish layout plans

#### For Each

//objects are like associative arrays in PHP
//sets of key value pairs
//arrays are lists that keep their order

```javascript

		var exampleArray = ['apple', 'banana', 'melon'];
		exampleArray[0];
		"apple"
		exampleArray[1];
		"banana"
		exampleArray[2];
		"melon"

```

#### for each loops in Javascript

	exampleArray.forEach( );

- for each something in (here) do something
- takes a function??

//Derrick gets confused on how to explain the following function. 

```javascript
		exampleArray.forEach (
			function examplFunction(item) {
				console.log(item);
			}
		 );

```


He concludes it's time to move to a proper javascript file. 
To do that you can set it up much like a `style element`
When you use javascript you want to know about what's on the page so it's best if scripts are on the bottom.`<script></script>`



```javascript

		var name = "Alina";
		console.log(name)
		//^^^^^^^^^^^^^^^
		//this prints the name to the console


		var total = 200 * 50 * 2;
		console.log(total);

		//you can use as many arguments as you want for console.log().

		var total = 200 * 50 * 2;
		console.log("total: ", total);
		//will print total: 200

		var exampleArray = ['apple', 'banana', 'melon'];
		console.log(exampleArray[2]);


		function shoutName(name) {
			var name = prompt('What is your name?');
			console.log("I am " + name + "!!!");
		}




for (var current = 0; current <?; current++)
	//for every current that equals 0, current is smaller is something, for each time it iterates add one to the current count. 
	//++ add one

	//.length is a property not a method
	// remember functions specific to objects are referred to as "methods";
	//that means you don't need a () 


//ok so here is an array

	var exampleArray = [1, 2, 3, 4, 56, "hi"];
	console.log('array length', exampleArray.length);
//logged to the console with a length property


function shoutName(name) {
	console.log("I am " + name + "!!!");
}


for (var current = 0; current < exampleArray.length; current++) {
	console.log('current', current)
}





Updated: 
//here is the array

var exampleArray = ["actions", "who", "dogstooth", "words", 56, "hi"];
	console.log('array item', exampleArray[0]);
// console prints it to the console

//current is thrown into the item location spot
//that let's us list the items individually
//for every current that equals 0, is the current smaller than the length OF THE ARRAY NOT THE STRING LENGTH, for each time it iterates add one to the current count. 
for (var current = 0; current < exampleArray.length; current++) {
	console.log('current', exampleArray[current])
}


	SET UP: `var current = 0`
	CONDITION:`current < exampleArray.length` 
	INCREMENT:`current++`

WHAT TO DO EACH TIME
console.log('current', exampleArray[current])



//So how can we combine the shout name function with the looping array?

		function shoutName(name) {
			console.log("I am " + name + "!!!"); 
		}

		var exampleArray = ["actions", "who", "dogstooth", "words", 56, "hi"];

		for (var current = 0; current < exampleArray.length; current++) {
			shoutName(exampleArray[current]);
		 }



// ### How to make a reusable function
// this function will take an array and a function
//for every item in the array it will run the function
		function doThings(anArray, aFunction) {
			for (var i = 0; i < anArray.length; i++) {
						aFunction(anArray[i]);
					 }
		}

 doThings(exampleArray, shoutName)
 //so in this example this will see the words "actions", "who", "dogstooth", "words", 56, "hi"


// this function needs the item
 // it will then create an list item element in the html
 // it will change the list items text content to the item

function printItem(item) {
	var listItem = document.createElement('li');
	listItem.textContent = item;
	document.body.appendChild(listItem);
}

//I made this same style function yesterday. FLEXIBLE KNOWLEDGE!!!!

 doThings( exampleArray, printItem );
//an function that prints items to the screen from an array

How Does It Work?
//do item takes the named array
//then it it will run the function as many times as there are items
//because it knows the .length
//and it is comparing the item location number via the array[i] and has set conditions:
	//if i is less than the location number then add one
	//i has a standard amount of 0
	// this will change the location number
//for every item run the function named
//printItem is named
// but it also fills in printItem from printItem(item)
//to printItem(anArray[i])
//Do Things knows the array and the number so therefore so does printItem

//### But What if I want to know the order?

function printItem(item, index) {
	var listItem = document.createElement('li');
	listItem.textContent = index + " " + item;
	document.body.appendChild(listItem);
}

function doThings(anArray, aFunction) {
	for (var i = 0; i < anArray.length; i++) {
				aFunction(anArray[i], i );
	}
}

// again you can change print item's knowledge via Do Things: aFunction(anArray[i], i );

//### What if I need to compare the array to the item? It's possible!

function printItem(item, index) {
	var listItem = document.createElement('li');
	listItem.textContent = index + " " + item;
	document.body.appendChild(listItem);
}

function doThings(anArray, aFunction) {
	for (var i = 0; i < anArray.length; i++) {
				aFunction(anArray[i], i, anArray );
	}
}

//THIS IS REVERSE ENGINEERING A BUILT IN JAVASCRIPT FUNCTION


//array.forEach (enter the function you want passed in)
//YOU CAN ENTER THREE ITEMS LIKE ABOVE? item, index, anArray?
//fuction() is an anonymous argument

exampleArray.forEach( function(item, index, anArray) {

});


exampleArray.forEach( function(placeholder) {
	console.log(placeholder); // the word doesn't matter
});

exampleArray.forEach( function(item, index, fullArray) {
	console.log(item, index, fullArray);
});//again the words don't matter they are placeholders

you can also leave out the item, index and fullarray


this will also work! See the words dont matter
exampleArray.forEach( function(dog, idog, dogs) {
	console.log(dog, idog, dogs);
});



#### For LOOPS
---
## 3/9
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- [] finish layout plans

### USER INPUT WITH DIALOGS


document.createElement('button')


give the button a class:

button.classList.add('class-name');

alert('watch out!');

confirm('are you sure'); //option to ok it yes- true cancel - false

prompt('how old are you')

correct interpolation: alert(`hello ${name} nice to meet you`);

//a reference for a function - you don't need to write var etc etc

function test() {
	console.log('test...');
}

```

Hello E4P exercise 1

```Javascript
		
		function introduction(){ 
		var name = prompt("What is your name?");
		    if (name) {
		        var message = "Hello, " + name + ", nice to meet you.";
		        alert(message);
		    } else {
		     alert('Sorry, come again?');
		    introduction();
		    }
		}


Add an event listener:

	`button.addEventListener('click', introduction);`

Functions can be defined and run later or used whenever and wherever as many times as you like while the page is loaded. 


Other function examples:

function timesTwo(anumber) {
	return anumber * 2;
}

timesTwo(2); //4
timeTwo(13); //26

function higherThanTen(someNumber) {
	if (someNumber > 10 ) {
		return true;
	} else {
		return false;
	}
}

higherThanTen(2); //false
higherThanTen(13); true

console is an object
console.log(stuff) is a function of that object
functions specific to objects are referred to as "methods";


function button(){
    var button = document.createElement('button');
    document.body.appendChild(button);
    button.textContent = "Click!";
    button.style.padding = "10px";
'10px'
button.addEventListener('click', e4p);
}

```
---
## 3/7
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules
- finish layout plans

DOM - Document Object Model

HOW IT WORKS

W3C - people who write the spec
	 - working documentation dates to 1998 
- programming API for HTML and XML documents
- Application Programming Interface - API a set of interaction points and rules between two systems
(XML documents are like SVGs)
- Wikipedia: The DOM is a cross platform and language independent interface that treats XML or HTML document as a tree structure wherein each node is an object representing part of the document. 
- - what is a node again?

Document Object Model:
	[Document]
	|
	|--[root element: <html>] 
		|
		|--[element:<head>]
		|	|
		|	|--[element: <title>]
		|		|
		|		|--[text: "My title"]
		|--[element: <body>]
			|
			|--[element: <h1>]
			|	|
			|	|--[text: "a heading"]
			|
			|--[element: <a>]--[attribute: href]
				|
				|--[text: "linl text"]

In practice its a basically javascript object, it's not really used with other languages

Ire ADerinokun - bitofcode.de

HOW IT WORKS:
- it? gets the document
- browser "looks" at the document on the server
- it retrieves a snapshot of the document
- it constructs the dom tree based on that snapshot
- creates a css ome? tree
- runs the javascript 
- creates a bigger tree 
- paints it to the screen


- in the console you can inspect the DOM selectors by
document.title
document.head

however you can't drill into the dom object in the same way as javascript and php
(document.html.head.title doesn't work)
so you need a `querySelector`

document.querySelector() - this will look for a selector


```javascript


//example: 

document.querySelector('h1')
	- this can return something like this: 
	```
	<h1 class="welcome-message"> Example Page Title</h1>
	- it looks like html but it's not it's a javascript object rendered as html
```javascript
	- its a 
		h1 {
			textContent: "Example Page Title",
			classList ['welcome-message'],
			length: ....		
		}
You can point a reference to a javascript object:
	var heading = document.querySelector('h1')
Now you can drill into the object?


var paragraphs = document.querySelector("p");
- this will find the first paragraph not all the paragraphs

How to create an element:
	var headingTwo - document.createElement('h2');
then you can take that element and value:
	headingTwo.textContent = "This is the second heading";

You can add properties to the elements. There was no class element unlike textContent above so we have to add it:
	headingTwo.classList.add('my-favorite-heading')

Put the element into the html? //not super important
	document.body.appendChild(headingTwo);


the entire browser is a javascript object

window will show everything in the window
these functions work within the brower and are listed under "window"

```

---
## 3/6
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] Layouts for modules


### JAVASCRIPT!



- Open a browser window: like about:blank
- open the inspector panel
- go to console: where you can write javascript code

- How to declare a variable
	`var name = "Derrick";` //statement
Note: statements result in a value, you may or may not assign them a "reference"

#### SYNTAX
```js
`var name = "Alina"; //string
var age = 35; //number
var yearsUntilCrisis = 50 - age; //basic math
var message1 = name + " is " + age + " years old."; //concatenation
var message = `${name} is ${age} years old`; //string interpolatiom (for later!)`
````


#### ARRAYS
`var name = ["one", "two"];`

#### OBJECTS
	`var person = {
	    height: 6,
	    name: "Derrick",
	    alive: true,
    };`


#### THINGS YOU CAN DO
- Add items to arrays
	`varName.push("newItem");`
	or use dot notation
	`name.new = "newItem";`


- Return using square bracket notation: `person['name'];`
- Return using dot notation: `person.name;`


- calling on nested items in objects:

	- object:
	```Javascript
		`var cat = {
		    name: "bob",
		    age: "2",
		    friends: ["sally", "misty"], //array
		    favoritePlace: {
		        name: "a warm lap.",
		        timeSpentPerDay: 2,
		    },`//nested object
	- var `firstCat = cat.friends[1];`
	- var `catPlace = cat.favoritePlace.name;`
	```

#### OBJECTS AND FUNCTIONS
- Objects can hold functions like below:

```Javascript

		`var cat = {
		    name: "bob",
		    age: "2",
		    friends: [],
		    favoritePlace: {
		        name: "a warm lap.",
		        timeSpentPerDay: 2,
		    },
		    cry: function() {
		    return "meeeeeeeeoooooooow!";
		    },
		};`
```

- How to call up that function:
		`cat.cry()`


- type console and that will show you built in functions?

		`console.log()` //similar to print_r (not working?)
		`console.clear()` //clears the console


NOTE: a functuon that belongs to an object is called a METHOD

`log` and `clear` are methods of the console object(console in the browser) and they are not part of the javascript core.


---
## 2/28

new commit. Let's try again. 

---
## 2/1-20
- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through end
- [x] Navigation
- - [x] forms
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [x] JSON 
	- - [x] goals
	- - [x] resume
	- - [x] projects pages into modules
	- - [x] forms
- [x] Unify CSS variables

### Portfolio Review Notes

#### Part 24:

- Issues's in Derrick's site: 
- - inner columns all have padding: 
- - - specificing paddings for spoecific parts while keeping general inner column padding

- svg in header so it doesn't shrink:
	
	`flex-shrink: 0;` //this piece of content, don't shrink down!


- Side notes:
- - site.css is a working space before their own file
- - Name for top header navigation: mast-head
- - modules: used more than once
- - components: small parts of the code
- - partials: mast-head?

- ! realize when you are using interpolation and concatintation


- Code for when there isn't a template file:

```PHP
		$page = "home";
		if ( isset($\_GET["page"]) ) {
			$page = $\_GET['page'];
		}
        // if the super global variable has a `?page="pagename"` set in it's array then this variable stands for that page-name. 

        $pageFilePath = "templates/pages" . $page . ".php";
        if (file_exists($pageFilePath) ) {
          //if the file exists go get it
        include("templates/pages" . $page . ".php")
        } else {
        echo "error page $page does not exist";
          //sort of a 404 error page
        }

```
#### Part 25: Projects Page

- Tower Git: 
	- right click and "discard local changes" for commits you don't want to keep
	- what you write for your commits can make you sound professional or not
	- - What sounds better? "added stuff" vs "consolidate temlate logic for page router"
- folder structure is up to you: maybe make them logical lol
- readme might be a good place to make rules about the file location





#### QUESTIONS: Tower detailed description and / commands - examples?





---
## 2/1-19
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through #30
- [x] Navigation
- - [x] forms
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] JSON 
	- - [x] goals
	- - [x] resume
	- - [x] projects pages into modules
	- - [x] forms
- [x] Unify CSS variables

---
## 2/1-15
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	
- [] Priority: watch the ultimate portfolio process videos through #30
- [] Navigation
- - [x] forms
- [] Turning the 
	- - [] goals
	- - [] resume
	- - [] projects pages into modules
- [] JSON 
	- - [] goals
	- - [] resume
	- - [x] projects pages into modules
	- - [x] forms
- [] Unify CSS variables




---
## 2/15
- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	

Personal Site Data Structure:
- redo file organization
- style guide page
- modular structures
- json data



### 19

#### API Json decode

    $json = file_get_content("");	
    $variable = json_decode($json, true); 

- `$json = file_get_content("");`//gets the json data
	
- `$variable = json_decode($json, true); `//turn it into the php array 
	 - true for the associative array. The variable points to this data. 


      formatCode($variable) 
      formatCode($variable["name");

The function referenced: 

	function formatCode($things) {
      echo "<code class='show-code'>";
        echo "<pre>"
          print_r($things);
        echo "</pre>";
      echo "</code>";
    }


**Side Note: repeating inclusion of files at the top, lots of repetition that can cause issues**

### 20

#### Query strings 

Query Strings start with ? can be useful when looking at API data 
example: Derrick's pokemon project the link had a `?limit=20` which shows that the amount display was limited to 20. On the API link adding `"endpoint/pokemon?limit=151"` changed the amount displayed.


Use a query string to see list vs detail page?
  <a href="?view=lists"> all pokemon</a>

```

```PHP

//Check the server for the query string and return it
   
    function queryString() {
      return $_SERVER['QUERY_STRING'];
    }

```
echo it in the template to see it

```PHP

    if ($_GET["view'] == "list") {
        echo "List List List";

    if ($_GET["view'] == "detail") {
        echo "Detail Detail Detail";
    } else {
    //must be a list page
		Put JSON data conversion info here    
    }
 
 ```
Need to set the `$_GET["view]`

so you can add set an 

    if( issset($_GET['view'] ) {
    $view = $_GET["view"];
    }
    
and above it a 
   
	$view="none";

### 21

**Explode**
explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.

    $x = explode('/", $url);
     formatCode($x);

#### Summary 
**So in the last few videos Derrick has set up a pokemon information page using the Pokemon API**

- Find Pokemon API
- expose the array and see the view query string 
- view is part of the url for the pokemon API
- If view is set in the url then point to that information with $view

- If $view is equal to "detail"  then spit out this info:
- Otherwise we are on a list page.
- If we are on a list page:
- grab the json data,
- decoded the json data into a PHP array
- point to "results" another specific part of the pokemon API array

- for every pokemon entry
  - grab the url
  - $urlParts points to the subarray. We use an explode function to get there. Seeing the explosion lets us see what item on the subarray is the ID. The parent array showed a name and url. Explode let us see the subarray under the url.
  - $link is that explosion line 6
  	- SHow this:
  		- bullet point
  			- link
- end of for every

#### The detail plain logic:
within the detail page we need to get that information as well.
so we need the json data and a `$_Get Id` from the query string in order to know the id


**The code so far:**


```PHP

    if ( isset($_Get["view"]) ) {
        $view = $_Get["view"];
    }

    if ($view == "detail") {
        $id = $_Get["id"];    
        $json = file_get_contents("$endpoint/pokemon/$id");
        $data = json_decode($json, true);
        //formatCode($monster);
    echo"<h1>$monster[name]</h1>";

        }else {
            //must be a list page
            $json = file_get_contents("$endpoint/pokemon?limit=10");
            $data = json_decode($json, true);
            $monsters = $data["results"];

            echo "<ul>";
            foreach ($monsters as $monster) {
                $url = $monster["url"];
                $urlParts = explode('/', $url);
                $id = $urlParts[6];
                $link = "?view=detail&id=$id";
                echo "
                    <li>
                        <a href='$link'>
                            $monster[name]
                        </a>
                    </li>
                ";
            }
            echo :"</ul>";
        }

```

---
## 2/14

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] git commit
- [] Milestones	


## portfolio review

### 10
?? if it doesn't exist do this


### 11
	
question: isset? vs just an if statement
	
Create a default: 
	- using this blank equals blank but if not here use this:
	- $variable = $variable ?? '<span class="todo-warning"> This is unfinished :) </span>' 
	- suggestions: page titles/headers, paragraphs, intros etc


Style Guide Page:
	SG for style guide in the header
	(Living style guide)

### 12 
	Css class {
		order: 2
	}
- flex and grid children can reaarange their order.
- diptych: class of flipped apply to modules with new order
	- variable for class:
		- On index importer page:
		- <section class="other-news">
			<inner-column>
				<?php 
					$heading = "in other news";
					$flipped = true;
					include('file/location/this-one.php');
				?>
				</inner-column>
			</section>
		- On graphic-dyptich template: 	
				<?php $isFlipped = "flipped";?>
					if ($flipped) {
						isFlipped = "flipped"
					}
				?>	

		- So within the class
			<?=$isFlipped?>

		- So if if the module is set to $flipped = true in the feeder, it will deplay the alternative layout. 


- Add details to help other developers:
instead of intro should be here
"many pages will utilize this page header module. it includes the main page title. and a supporting paragraph to get the visitor acquainted with the pages goals"

- generic text template: Generic text heading
this generic text area can have any HTML text elements. It can be long or short, toss in whatever you want. 



### 13 

JSON data

JSON SYNTAX
make a goals.json file
folder: data
	
		[
	{
		"heading" : "five years",
		"goals" : [
			"goal number one",
			"goal number two",
		]
	},
	{
		"heading" : "five years",
		"goals" : [
			"goal number one",
			"goal number two",
		]
	}

no trailing commas

### 14 MORE JSON
		<?php
			$json = file_get_contents('data/goals.json'); //passes in the json data
			$goalsData = json_decode($json, true); //do you want this to be an associative array?
		?>

	<goals-module>
		<?php foreach ($goalsData as timeblock)?>
....

- First mock up the html how you would like to see it on the screen before writing the php
...html then:
			
			<goals-module>
				<?php foreach ($goalsData as $timeBlock)?> {
					<h2 class='attention-voice'><?=$timeBlock["heading"]?></h2>

					<ol>
						<?php foreach ($timeBlock["goals"] as $goal)?> {
						<li>
							<p><?=$goal?></p>
						</li>
						<?php } ?>
					</ol>
				<?php } ?>
			</goals-module>

- then put this module on the style guide page


### 15

fill in data

### 16

resume/ home / about style guide/ goals/ resume

functions page: in the header or another page all the pages use

		enableerrorreporting

		formatcode($things)


datalist element
dt -
dd -description

### 18
emmet = select ctrl + w wrap your thing with stuff


when to be a standalone module

---

## 2/13

- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones	


grid: 

repeat: questions

these are relative, so think ratios:
grid-template-columns: 1fr 1.fr
2fr 3fr
20fr 30fr


by default everything wraps horizontally

lines start at line 1 not 0
grid-column: 2 starts at line two
grid-column: span 2; will span two spaces


Only going so many rows:
try and let rows be implicit (auto) heitght unles absolutely necesary


repeat(20, 300px)

repeat is a function
repeat( 1 amount of times, 1fr the space of the column)
200px repeat(3, 1fr) 30px

3n + 3 at the 3rd 

justify/align: place-self or place-items: center


---

## 2/9

- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones
- [] Spend 1 hour on the ultimate portfolio
- [] Enable User Log In
- [] Call BARC about Cake's 17th appointment. Move to 8am	



Notes from Portfolio Review:

-
variables as headings

			<?php 
				$heading = "heading you need to show";
				include('file.php')
			?>
-	
	- On the other page:

			<h2><?php $heading ?></h2>

	- This is helpful for reused modules. You can change the content without having to use new php files.
	- helpful for the page header as well


Set the widths for inner column, you can't do it at break points but you can do it for 
	
	html {
		--tablet-inner-column: 600px
	}

	inner-column{
		width: var(--tablet-inner-column)
	}

Push the footer down with flex grow

	body main flex-grow: 1
	I think body needs to be set to display flex for this to work


?? Content is content but if you can't find it use this generic heading

	$content = $content ?? "blah blah generic"

- You can create a php with just generic text rather than inserting lorem ipsum everywhere.

base css files as well at php files

File structure

node - javascript files, 3rd part

css>
	site.css
templates >
	components >
	modules >
		name>
			potential controller file
			module name.css (styles for each modules)
			module nams.php
			maybe css?
	pages
index.php



CREATING SUBLIME SNIPPETS:

		<snippet>
			<content><![CDATA[
		<div class="$1">
			<p>The ${2:cat} was ${3:fast}.</p>
		</div><!-- /$1 -->
		]]></content>
			<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
			<tabTrigger>d</tabTrigger>
			<!-- Optional: Set a scope to limit where the snippet will trigger -->
			<scope>text.html</scope>
		</snippet>

- Can be found under tools > developer > snippet
- Save as sublime-snippet
- It is an XML file and the text between "[CDATA[" and "]]>" tell it to not percieve that text as XML data
- tab trigger is the key or word + tab that will trigger the text to show up
- scope is where this snippet will be able to be used 
- all the scope source text can be found here: https://gist.github.com/iambibhas/4705378

- $ indicates a place holder. $1 above will leave your cursor there so you can immediately fill out the text
-- $1 will copy/mirror whatever is your placeholder text
-- ${number:text} This will give your placeholder a value text. So when you hit d + tab you can hit tab again to immediately edit the $2 and then $3 spots in your snippet.
-- to get rid of the blinking cursor on the mirror line: use a substition:
	- ${1/\*//}
		- this accepts regular expressions and this syntax accepts 4 arguments : ///
		- 1st is a the field we want to use
		- 2nd is the regular expression. For substitution we use \*
		- 3rd and 4th options are empty


EMMIT CONTROL:
CONTROL + W


---

## 2/8

- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones
- [x] Fix up my journal
- [x] Spend 1 hour on the ultimate portfolio
- [] Ask some WP questions
- [] Enable User Log In
- [x] JSON
- [] Call BARC about Cake's 17th appointment. Move to 8am	



Notes from Portfolio Review:

php and node allow you to stitch html files together
initiliaze git repo
	add
	git ignore - ds store: ds store is a file about the file itsef. You don't need it in the repo
	for commits first letter needs to be Capitalized "Add"

A fake image can be a div with example styling:
	aspect ratio: 1/1
	background: black

 



---

## 2/7

- [x] Set Up Journal Entry
- [x] Stand Up
- [] git commit
- [] Milestones
- [x] Fix up my journal
- [] Spend 1 hour on the ultimate portfolio
- [] Ask some WP questions
- [x] Front Page: 
		- content?
- [x] Style the About Page
- [] Enable User Log In
- [x] JSON
- [] Call BARC about Cake's 17th appointment. Move to 8am		







---
## 1/30

- [x] Set Up Journal Entry
- [x] Stand Up
- [] make style tiles
- [] git commit
- [] Milestones


### Random Side Note: 

		function getFile($path) {
		  return dirname(__FILE__) . '/' . $path;
		}

is just a function name - right? I made it up. Maybe there’s a better name
is a built-in PHP function that will return the directory name (given a path)
__FILE__ also a built in PHP thing - and is simply the name of the current file

###
Blockers: JSON. REMEMBER you didnt finish that lesson. OOps

### video notes

- What is Word Press?
	just a bunch of PHP functions really.
	ghelp you get and store data in a database, like the for each statements and JSON. This saves it in a easier way.

- wordpress.org its self hosted
	WordPress is software designed for everyone, emphasizing accessibility, performance, security, and ease of use. Today, WordPress is built on PHP and MySQL, and licensed under the GPLv2. It is also the platform of choice for over 43% of all sites across the web.

- define is not much different than a meta tag
- how do we get a database
- sequalpro :  name and default are root and root. 

name the database the name of the project but short:

what is word press? 
	it's a big umbrella term for a lot.
		a free admin panel
		a form making machine











---

## 1/29

- [x] Set Up Journal Entry
- [] Stand Up
- [] make style tiles
- [] git commit
- [] Milestones



### CSS Notes

		section:nth-of-type(odd) {
			position: relative;
		}


		section:nth-of-type(odd):before {
			content: "";
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			background-image: var(--texture);
			background-size: cover;
			overflow: hidden;
			opacity: 50%;
			z-index: -1;
		}
	/*this is a psuedo element, basically it's a pretend element.
	you have to set the parent or real element into a position relative and the child as absolute.

	then make sure it doesn't collapse by setting the top/right/left/bottom are set to 0. 

	making it a z-index -1 makes sure that it is underneath the other items in the element.
	*/

---
## 1/21-25/23

- [x] Set Up Journal Entry
- [x] Stand Up
- [x] add learnings from the last few days into the journal
- [x] git commit
- [x] fix personal portal
- [] Milestones
- [] research travel websites - boutique hotels

## For later:
- [] return to JSON lesson after theme challenge

CSS learnings: 
	
		div.section > div:first-child
-- Using the > changes the description to: "Find any divs that are the direct descendents of section divs" which is what you want.

JSON Lesson - I need to return to this lesson after the theme challenge:



		//CREATE ENTRY
		$newTrail = [
		"name" => $name,
		];
		var_dump($newTrail);


		//PULL UP THE JSON FILE
		// $json_data =json_encode($posts);

		//SAVE ENTRY
		//file_put_contents("myfile.json, $json_data");

## THEME CHALLENGE - RESEARCH

- travel - boutique hotels: romance?

Themes in the language



###The Hotels

The Hotel June

--  What is working:
	- images reflect repeating design patterns (rounded book now)
	- great room photography
	- color pallet
	- phone scale the large font is eye catching and easy to read
	- our: bungalows shows great info hierarchy
	- photos lean into the color pallet
	- soft text transitions
	- little wavy lines reminding you of the water
	- text is broken up by large photos
	- desktop: images pressing text into smaller bit-size chunks
	- sharper image edges vs the flowery font is nice

-- What isn’t
	- header images are pixelated
	- “Meet the latest” on desktop is just waaaay too much large text
	- dots on images to scroll through go missed
	- background leopard pattern gets cut off
	- the drawn marks + the digital ones get too chaotic with too much large font on desktop


-- What keywords or phrases keep coming up,
	- private
	- peaceful
	- thoughtful
	- art
	- music
	- design
	- discover

-- theme words: California chic

Sonder
--  What is working:
	- colors: really great subtle changes with outlines for those with vision issues
	- corners: love the rounded corner on large images but the sharp corners for the small ones
	- font size: maybe too thin for legibility on header for desktop
	- button style: hover color change, just enough. Rotate image buttons are clear
	- icons

-- What isn’t
	- header image with text is a bit confusing
	- lack uniqueness, all of these tricks are very popular right now
	- the stupid video with a play video. It’s already playing
	- edge fade is too drastic in reviews

-- What keywords or phrases keep coming up:
	future
	choice
	comfort
	story
	summer

-- theme words: corporate chic cool


Amigo
--  What is working:
	- logo font is interesting
	- separators: dark thin lines are a nice contrast to the ugly header fonts
	- corners: very sublte rounding on buttons
	- font size: h2 or h3 is a really nice typewriter font
	- button style: very clear
	- icons: thin drawings, have a very slight pen-to-paper feel

-- What isn’t
	- header video: kill it with fire. Very eye-catching at first but quickly becomes fatiguing to have on the site.
	- there is a weird little fantom logo in the bg as you scroll
	- font from the logo without the middle cut out is kinda boring
	- images are a bit blurry
	- header font is terrible
	- desktop breakpoint is too wide

-- What keywords or phrases keep coming up:
	luxe
	explore
	artful
	natural

-- theme words: modern rustic chic

Per La
--  What is working:
	-
	- colors:
	- corners:
	- font size
	- button style: clear on the image rotations. thin black line for links
	- footer extra clear on a laptop

-- What isn’t
	- another stupid video header
	- logo is too tall and makes the header too big. It also reads as too small for center placement.
	- headers take up a lot of space on a laptop
	- too much going on for the content rotation. Something about the 3 images+ first image that looks like it has a vertical layout line (but it doesn’t) + theme titles, + headers + dates on top, its too much. The content hierarchy isn’t clear.
	- header: space-between placement is just too much.
	- icons: feel outsourced, they are a different weight than everything else.

-- What keywords or phrases keep coming up:
	discover
	explore
	inspired
	curated
	escape
	style

-- theme words: old-world chic

Ultima Thule Lodge
--  What is working:
	- font choice for headers is great.
	font sizes for content hierarchy is clear

-- What isn’t
	- image on image with drop shadow.
	- text on very busy images
	- kinda feels like there are 2-3 different designers editing this page who all have different ideas.
	- font rules don’t seem consistent.
	- there are the artsy font sections, the corporate font sections, and the severe drop shadow on images sections.
	- icons are not consistent in style

-- What keywords or phrases keep coming up:
	cherish
	private
	surprising
	adventure
	wild
	discover
	explore

-- theme words: rustic nature

Short Stories

--  What is working:
	- colors: clear color pallet, good contrast.
	- corners: ink in corners of font. Reminds you of a previous age. Reflects the design of the hotel
	- movement tied to scrolling from user
	- links are clear without a hover
	- font size: scroll icons are clear without obstructing. reiterated underneath
	- button style: they are fine

-- What isn’t
	- colors: could be more dynamic
	- corners:
	- font size
	- button style

-- What keywords or phrases keep coming up:
	inspiration
	natural
	tranquil
	retreat
	urban
	artwork
	unforgettable

-- theme words: subtle vintage chic

Hotel Ziggy
--  What is working:
	- love the hand drawn looking lines
	- logo font is unique, the website doesn’t try and copy it all over in text, but does in style
	- colors: bold, good contrast
	- corners:
	- font size: header font size is great. great contrast.
	- button style: hand drawn boundaries, hover is subtle. maybe good? scroll buttons are clear
	- icons

-- What isn’t
	- bare spots don’t feel like needed visual air but instead evoke missing content
	- sometimes too cluttered
	- rotating vinyls hurts to look at

-- What keywords or phrases keep coming up:
	new
	celebration
	inspiration
	creative
	unforgettable

-- theme words: funky chic

Versper
--  What is working:
	- colors, font: good contrast
	- parts are a flexbox collage in a goodway
	- font size
	- button style
	- icons

-- What isn’t
	- the weird left alignment but small boxes are center-aligned??? (oh that’s tablet size)
	- kinda boring
	- button style: not always clear what is and isn’t a link, not uniform
	- the font on the images are totally unreadable in places
-- What keywords or phrases keep coming up:
	romantic
	private

-- theme words: we tried chic

Ryder
--  What is working:
	- colors: 60% it’s light and airy, a soothing color pallet. Color looks better on mobile
	- corners: rounded corners on a lot of the content.
	- font size: very easy to read
	- button style: reflects the corners
	- background: relects the rounded edges
	- works best of mobile

-- What isn’t
	- colors: kinda boring, not eye-catching at all
	- corners: by the end of the page there are too many rounded corners. It’s no longer balanced.
	- font size
	- button style: sometimes hand drawn and sometimes not? They often cover the text you want to read.
	- icons: they are fine. Nothing interesting.
	- desktop looks like a mess

-- What keywords or phrases keep coming up:
	discovery
	explore
	wander
	wellness
	wonder

-- theme words: spa vibe

look at: 
colors: 
corners:
font size
button style
icons





---
## 1/20/23


- [x] Set Up Journal Entry
- [x] Stand Up
- [] add learnings from the last few days into the journal
- [] git commit
- [] Milestones
- [] fix personal portal
- [] responsive layout garden!
- [x] waste time on a lame doodle about a slack comment


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

---
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
---
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



---
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



---
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



---


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

---
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

---
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

---

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
---
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

---
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



---
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



---
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

---
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
---
## 12/20/22

- [x] Set Up Journal Entry
- [x] Stand Up

---
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
---
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

---
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

---
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

---
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



---
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


---

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
---
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

---

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
---


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
---
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


---


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

---

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

---


