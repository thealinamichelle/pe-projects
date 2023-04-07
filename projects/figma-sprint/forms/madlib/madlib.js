//Psuedo Code
// #### MadLib

// requirements:for a noun, a verb, an adverb, and an adjective and injects those into a story that you create.

// In Memory:
// Reference names for noun, verb, adjective, and adverbs.
// A story with the references for noun, verb, adjective, and adverbs within the text.
// Input and Labels for spaces for a noun, verb, adjective, and adverb
// Submit click triggers
// input saved
// display message with updated variables
console.clear();



const $mlForm = document.querySelector(".madlib");
var output = document.querySelector("output.madlib-message");
console.log(output);

$mlForm.addEventListener("submit", function (event) {
	
	event.preventDefault();

	var message = "Please fill out all the things! ;)";
console.log(message);
	// input elements

	var noun = document.querySelector('#noun').value;
	var noun2 = document.querySelector("#noun2").value;
	var verb = document.querySelector("#verb").value;
	var verb2 = document.querySelector("#verb2").value;
	var adjective = document.querySelector("#adjective").value;
	var number = document.querySelector("#number").value;
	var adverb = document.querySelector("#adverb").value;	
	// other types of selector examples too...

	
	// var $adjective = document.querySelector(".adjective");
	// var $adverb = document.querySelector('[for="adverb"]');

	if (
			number 
			//&&
			// noun &&
			// noun2 &&
			// verb &&
			// verb2 &&
			// adjective &&
			// adverb
			) {
			// input values
			message = `As a ${adjective} time traveler using a ${noun} to journey to the year ${number}, you ${verb} with the locals and try to ${adverb} alter history. However, your efforts are foiled when you accidentally ${verb2} a famous historical figure, causing a comical chain of events that lead to you discovering that you have become your own ${noun2}.`;
			output.innerHTML = `<p> ${message} </p>`;
	}
	else {
			output.innerHTML = `<p> ${message} </p>`;
	};
		console.log(number);
		console.log(noun);
		console.log(noun2);
		console.log(verb);
		console.log(verb2);
		console.log(adjective);
		console.log(adverb);
		console.log("message : " + message);
});


console.log("The file is here.");
// Constraints Use a single output statement for this program. If your language supports string interpolation or string substitution + use it to build up the output. Challenges Add more inputs to the program to expand the story. Implement a branching story, where the answers to questions determine how the story is constructed. You’ll explore this
//