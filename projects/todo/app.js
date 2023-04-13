console.clear()
console.log("valid");


//function write a to do app
const body = document.querySelector("body");

var idcount = 1;
var todos = [];
var trashed = [];
var complete = [];

var test = ["one", "two", "three"];

function update(note = "") {
	console.log(`${note}`);
	console.log(`todos: `, todos);
}

function add(content){
	const todo = {
		id: `a${idcount++}`,
		content: content,
	}; 
	todos.push(todo);
	update(`Added ${content}`);
}

function remove(id){
	var todo = {};
	update(`Removed ${todos[id].content}`);
	trashed.push(todos[id].content);
	var removed = todos.splice(id, 1);
}


function change(id, content){
	todos[id] = content;
}

function done(id){
	todos[id].complete = true;
	complete.push(todos[id].content);
	update(`Completed ${todos[id].content}`);
	console.log(`the complete array: ${complete}`);
}

// ------

function renderTrash(){
			var completed = document.querySelector("#trashcan");
		var template = `<ul><h2>Trash</h2>`;
	trashed.forEach( function(trash) {
		template += `<li>${trash}</li>`
	});
	template += `</ul>`;
	trashcan.innerHTML = template;
	console.log(trashed);
}

function createTrashcan(){
	var trashcan = document.createElement("div");
	trashcan.id = "trashcan";
  	body.appendChild(trashcan);
};




function showcomplete(){
		var completed = document.querySelector("#done");
	var template = `<ul><h2>Completed</h2>`;
	complete.forEach( function(done) {
		template += `<li>${done}</li>`
	});
	template += `</ul>`;
	completed.innerHTML = template;
};

function createDoneBin(){
	var completed = document.createElement("div");
	completed.id = "done";
  	body.appendChild(completed);
};



function renderTodos(){
	var template = `<ul><h2>Tasks</h2>`;
	todos.forEach( function(todo) {
		template += `<li>${todo["content"]}</li>`
	});
	template += `</ul>`;
	
	var app = document.createElement("div");
	app.id = "app";
  	body.appendChild(app);
	app.innerHTML = template;
}

// -------


add("write a todo app");
add("write up an E4P");
add("come up with app ideas");
add("here is another");
done(2, "this is a new one");
add("there need to be three");
add("huh");
add("some more");
// update();



remove(0);

done(3);

renderTodos();

createTrashcan();
renderTrash();
createDoneBin();
showcomplete();






















