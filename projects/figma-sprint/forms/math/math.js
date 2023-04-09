(function(){

	const box = document.querySelector('#a127');
	var form = box.querySelector('form');
	var x = box.querySelector('#number1');
	var y = box.querySelector('#number2');
	var output = box.querySelector('output')
	var clear = box.querySelector('button#reset');
console.log(clear);

	function user_definedMet(num){
	    return +(Math.round(num + "e+2")  + "e-2");
	};



	function doMath() {
		if(x.value && x.value) {

		var o = x.value;
		var t = y.value;


		var add = Math.round(o + t);
		var sub = Math.round(o + t);
		var div = Math.round(o / t);
		var mult = Math.round(o * t); 



		var message = `<p>What is the first number? ${o}</p>
							<p>What is the second number? ${t}</p>
							<br>
							<p>${o} + ${t} = ${add}</p>
							<p>${o} - ${t} = ${sub}</p>
							<p>${o} / ${t} = ${div}</p>
							<p>${o} x ${t} = ${mult}</p>`;

		output.innerHTML = message;

		}
		else {
			output.innerHTML = `<p>I'm here too!</p>`;
		}
	};



	box.addEventListener("submit", function(event){

		event.preventDefault();
		doMath();
		console.log("you pressed submit");

	})

	clear.addEventListener("click", function(event){

		console.log("you pressed clear");

		output.innerHTML = "";
	})





})()







