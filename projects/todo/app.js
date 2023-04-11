function update(note = "") {
	console.log(`--- ${note}`);
	console.log('todos: ', todos);
}

var count = 0;
const todos = [];

console.log('todos: ', todos);



// check off a todo

function add(content) {
	//instead of pushing in a line item what about adding in an object

	var todo = {
		id: count++,
		content: content,
		update(`Added ${content}`);
	};
	
	todos.push(todo);
	update();
}

function remove(id) {
	todos.splice(id, 1)//start, end
	update();
	
}


add("Go to the store");
add('prepare dinner');
add('go to bed');
add("Add Cake's walk to the calendar");


remove(0);





























