(function(){

	console.clear();

	const box = document.querySelector('#a124');

	var output = box.querySelector('#a124message');
	var p = output.querySelector('p');
	var input = box.querySelector('#a124name')



	function hello(){

		if (input.value) {
			var message = `Hello ${input.value}, how are you?`;
			console.log(`p is reset: ${p}`)
			p.textContent = message;
			console.log(`p with message: ${p}`)

		}
		else {
			var message = `<p>I'm sorry what? I couldn't hear you</p>`;
			output.innerHTML = `<p> ${message} </p>`;
		}

	}






	box.addEventListener("submit", function(event) {

		event.preventDefault();

		hello();

	} );

})()






//takes in input
 