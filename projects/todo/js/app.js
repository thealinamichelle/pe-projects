//notes: 	
//if you have a property with the same value such as:
	// hello: hello,
	// you can write this instead:
	// hello,
	
	
	//":  function" is not necessary


console.clear();









//CONSTRUCTOR FUNCTIONS

function Monster(name, age) {
	this.name = name,
	this.age = age,
		
	this.roar = function() {
		console.log(`ROAR ${this.name}!!!!!!!!`);
	}
}

Monster.prototype.whisper = function() {
	console.log(`hi my name is ${this.name}`);
}

const chunky = new Monster("chunky", 35);
const blob = new Monster("blob", 5);
const sleepy = new Monster("sleepy", 77);

chunky.roar();
blob.roar();
sleepy.roar();

chunky.whisper();
blob.whisper();
sleepy.whisper();

//constructor functions in the video are a bit confusing. So I understand these as tools to build more apps. A functions that generates new interations of app/functions.

//behind the scenes the constructor is generating the objects:

// var chunky = {
// 	name: "alina";
// 	age: "35";
// }

//new key word tells the system to treat this differently

//removing "new" gets this error: Uncaught TypeError: Cannot read properties of undefined (reading 'roar')







const body = document.querySelector("body");

const todoApp = {
	
	idcount : 0,
	todos : [],
	trashed : [],
	complete : [],
	previous : [],
	

	wholearr(){
		
		console.log(`this is the trashed array: `, this.trashed);
		console.log(`this is the completed tasks array: `, this.complete);
		console.log(`this is the previous version of tasks array: `, this.previous);
		console.log(`this is the current todo array: `, this.todos);
		
	},

	print(note = "") {
		console.log(`${note}`);
		console.log(`todos: `, this.todos);
		// debugger;
	},

	add(content){
		const todo = {
			id: `a${this.idcount++}`,
			content: content,
		}; 
		this.todos = [...this.todos, todo];
		this.print(`new version of Added ${content}`);
	},
	
	oldadd(content){
		const todo = {
			id: `a${this.idcount++}`,
			content: content,
		}; 
		this.todos.push(todo);
		this.print(`old version of Added ${content}`);
	},

	remove(id){
		var todo = {};
		this.trashed.push(this.todos[id].content);
		var removed = this.todos.splice(id, 1);
		this.print(`Removed ${this.todos[id].content}`);
	},


	change(id, content){
		this.previous.push(this.todos[id].content);
		this.todos[id].content = content;
		console.log(`task:-- ${this.previous}, was replaced by the task:-- ${this.todos[id].content}`)
	},

	done(id){
		this.todos[id].complete = true;
		this.complete.push(this.todos[id].content);
		this.print(`Completed ${this.todos[id].content}`);
		console.log(`the complete array: ${this.complete}`);
	},
	

	
};
		

// todoApp.add("this is the first one");
// todoApp.add("this is the second one");
// todoApp.add("this is the third one");
// todoApp.add("this is the fourth one");
// todoApp.remove(0);
// todoApp.change(0, "this is the replacement");
// todoApp.done(0);

// todoApp.oldadd("task 2");
// todoApp.add("task 1");
// todoApp.wholearr();		

// 	createhold: function() {
// // 		var hold = document.createElement("div");
// // 		this.hold.id = "hold";
// // 		body.appendChild(hold);

// // 	},

// ------
// 	renderchange: function() {
// 		const hold = document.querySelector("#hold");

// 		var template = `<ul><h2>Changed Entries</h2>`;
// 		previous.forEach( function(todo) {
// 			template += `<li>${todo}</li>`
// 		});
// 		template += `</ul>`;

// 		hold.innerHTML = template;

// 	},



// function renderTrash(){
// 	var completed = document.querySelector("#trashcan");
// 	var template = `<ul><h2>Trash</h2>`;
// 	trashed.forEach( function(trash) {
// 		template += `<li>${trash}</li>`
// 	});
// 	template += `</ul>`;
// 	trashcan.innerHTML = template;
// 	console.log(trashed);
// }

// function createTrashcan(){
// 	var trashcan = document.createElement("div");
// 	trashcan.id = "trashcan";
//   	body.appendChild(trashcan);
// };




// function renderComplete(){
// 		var completed = document.querySelector("#done");
		
// 		var template = `<ul><h2>Completed</h2>`;
// 		complete.forEach( function(done) {
// 			template += `<li>${done}</li>`
// 		});
// 		template += `</ul>`;
	
// 		completed.innerHTML = template;
// };

// function createDoneBin(){
// 	var completed = document.createElement("div");
// 	completed.id = "done";
//   	body.appendChild(completed);
// };

// function createTodoBin() {
// 		var app = document.createElement("div");
// 	app.id = "app";
//   	body.appendChild(app);
// }

// function renderTodos(){
// 	var app = document.querySelector("#app");
// 	var template = `<ul><h2>Tasks</h2>`;
// 	todos.forEach( function(todo) {
// 		template += `<li>${todo["content"]}</li>`
// 	});
// 	template += `</ul>`;
	
// app.innerHTML = template;
// }

// // -------
// createTodoBin();
// createDoneBin();
// createhold();
// createTrashcan();

// add("this is the first one");
// add("this is the second one");
// add("this is the third one");
// add("this is the fourth one");
// done(0);
// change(2, "This was replaced")
// remove(0);

// renderTodos();


// renderchange()

// renderTrash();

// renderComplete();






















