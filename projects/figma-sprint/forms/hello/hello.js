console.clear();

const formHello = document.querySelector('#a124');

var outputHello = document.querySelector('#a124message');


var inputHello = formHello.querySelector('#a124name')


formHello.addEventListener("submit", function(event) {

	event.preventDefault();

	if (inputHello.value) {
		var helMessage = `Hello ${inputHello.value}, how are you?`;
		outputHello.innerHTML = `<p> ${helMessage} </p`;
	}
	else{
		var helMessage = `<p>I'm sorry what? I couldn't hear you</p>`;
		outputHello.innerHTML = `<p> ${helMessage} </p>`;
	}

	



// 	What is your name? Brian Hello, Brian, nice to meet you!

// Hogan, Brian P.. Exercises for Programmers: 57 Challenges to Develop Your Coding Skills . Pragmatic Bookshelf. Kindle Edition. 


} );

//takes in input
 