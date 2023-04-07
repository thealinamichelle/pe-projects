(function () {


const box = document.querySelector('#a125');
var form = box.querySelector('form');

var input = box.querySelector('#a125count');

var output = box.querySelector('#string');

var wordsOutput = box.querySelector('#words');


function updateCount(){
	output.innerHTML = `The count is ${input.value.length}.`;
}

function wordCount() {

	var words = input.value.split(" ");
	wordsOutput.innerHTML = `The word count is ${words.length -1}.`;

	if (input.value) {

		var lastwordisntempty = words[words.length -1].length;
		wordsOutput.innerHTML = `The word count is ${words.length -1}.`;


		if (lastwordisntempty) {

			console.log(`The last word count: ${words.length}`);
				wordsOutput.innerHTML = `The word count is ${words.length}.`;

		} 
	}
	
}


updateCount();
wordCount();

form.addEventListener("input", function(){
	updateCount(); wordCount();
});


})()