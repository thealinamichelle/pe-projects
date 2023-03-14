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



// get array of all names

// MAP

const names = characters.map(character => character.name);

const heights = characters.map(character => character.height);

const eye_colors = characters.map(character => character.eye_color);

console.log(eye_colors);

const smallRecord = characters.map(character => 
	({name: character.name, height: character.height
}));
console.log(smallRecord);

//this is an implicit return but because we are returning an object we need to wrap it


// const firstname = characters.map(character => character.name.split(" ")[0])

// console.log(firstname);


// const totalMass = characters.reduce((accumulator, currentValue) => {
//     return accumulator + currentValue.mass;
// }, 0);

// console.log(totalMass);

















