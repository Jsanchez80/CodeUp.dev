 (function(){//Function is a thing that takes an input and produces an output.

//yntax function name (parameters) {body}
//	-Defines the function 'Does not' run the code in the body
//	_Syntax errors will be caught, not logical ones

/*Function doSomething () {
	1 + 1;
	console. log('Happy Monday')
}

parameters are valid identifiers, seperated by commas
parameter names only exist inside the function, have no relation (other than ones we assign by convnetion) to other variable names.
*/

function addTwo (number) {
	var result = number + 2;
	return result;
}

/*addTwo(2);

// function mutilipy (x, y) {
	return x * y;
}


function yell (phrase) {
	return phrase.toUpperCase() + '!'
}

this phrase is totally differnec than the phrase parameter in the funciton
 var phase = 'happy monday';
 console.log(yell(phrase));
*/

// take a string as input
// return true if there is a ' ' in the string, oherwise fasle
function hasASpace(stringToCheck) {
	var stringHasASpace = stringContains( stringToCheck, '');
	return stringHasASpace;
}



/* take a string and remove the spaces:
input => 'hello there lassen'
output => 'hello there lassen'*/
function removeSpaces(phrase) {
	while (phrase.indexOf('') !== -1){
		phrase = phrase.replace('','');
	} 
			return phrase;
}

	var result = removeSpaces('hello there lassen!');
	console.log (result);

//whild (/* ther is a space in  the string*/) {
	//remove the space
	//} console.log(phrase);

//takes a neeld and a haystack
//returns true if the neeld is in the haystack, otherwise false
function stringContains(haystack, needle) {
	var index = haystack.indexOf(needle);
	if (index === -1) {
		return false;
	} else {
		return true
	}
}

stringContains('hello codeup', 'codeup'); //+> true
stringContains('hello codeup', ' ' ); // => false


//definintions
//procedural
})();