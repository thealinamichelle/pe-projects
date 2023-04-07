(function() {


const box = document.querySelector('#a126');
var form = box.querySelector('form');
var quote = box.querySelector('#quote');
var author = box.querySelector('#author');
var output = box.querySelector('output');

console.log(output);

function removeMarks(array) {

	const mark = `"`; 
	console.log(mark);
	var myArray	= quote.value.split(mark);
	var index = myArray.indexOf(mark);
	var x = myArray.splice(index, `"`);
 	var result = myArray.join("");
 	return result;

}



function qaValidator(){

	if (quote.value && author.value){
		
		var $quote = removeMarks(quote.value);
		$author = author.value;
		output.innerHTML=`<p>${$author} says, "${$quote}". </p>`;
	}
	if (quote.value == 0, author.value == 0){

		output.innerHTML=`<p>No one said anything ever.</p>`;
	}
	if (quote.value, author.value == 0){
		output.innerHTML=`<p>It's best to give credit where credit is due.</p>`;
	}
	if (quote.value ==0 ){
		output.innerHTML=`<p>They must have expressed something at some point in their life.</p>`;
	}

}


form.addEventListener("submit", function (event) {
	event.preventDefault();
	console.log("you pressed submit");
	// qaValidator(); 
	removeMarks(qaValidator())
})

//if the quote has value save it

//if author has value save it

//return
// What is the quote? These aren't the droids you're looking for. Who said it? Obi-Wan Kenobi Obi-Wan Kenobi says, "These aren't the droids you're looking for."


// if only author or quote has value return
// 	please give credit

//stretch goals
// remove "" from the start and finish and add it on



})()
