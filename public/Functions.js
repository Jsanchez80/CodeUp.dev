"use strict";
(function(){

var myNameIs = 'Jose Sanchez'; // TODO: Fill in your name here.

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.
/////////////////////////////////////////////////////////////////////////
function sayHello (name) {
	console.log('Hello ' + name)
}
/*or you could use
 function sayHello(name) {
 	var result = 'Hello ' + name;
 	result;
 }*/

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
function sayHello (myNameIs) {
	console.log('Hello ' + myNameIs)

}
///////////////////////////////////////////////////////////////////////
/* or you could use
var returnValue = sayHello('Jose');
console.log("returnvalue" + returnValue);
*/
//////////////////////////////////////////////////////////////////////
// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
;

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.
var random = Math.floor((Math.random()*100)+1)
function isOdd (input) {
	
	if (input % 2 == 0){

		console.log (input + "is not an odd number")
	}else {
		console.log (input + "is an odd number")
	}
}
/*or you could use this for the TERNARY FUNCTION
function isOdd (odds){
	var result = (odds % 2 !== 0) ? 'This is an odd number' : 'This is an even number'
	console.log(result);
}*/

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
//isOdd(random)
})();