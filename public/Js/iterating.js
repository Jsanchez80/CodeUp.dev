(function(){
	"use strict";

	// TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
var names = ['Daniel', 'Mary', 'Josh', 'Amanda'];
	console.log(names);


	// TODO: Create a log statement that will log the number of elements in the names array.
	console.log("The number of elements in the array is " + names.length);
	// TODO: Create log statements that will print each of the names array elements individually.
  	  var element;
	  element = names [0];
	  console.log(element);

	  element = names [1];
	  console.log(element);

	  element = names [2];
	  console.log(element);

	  element = names [3];
	  console.log(element);

var roster = ["Maria", "Jesse", "Veronica", "Frankie"];
	  console.log(roster [3])
	  console.log(roster [2])
	  console.log(roster [1])
	  console.log(roster [0])

	  /*
		challenge is o make a new array with elements in reverse order.
	  or you could use var roster = roster.reverse();

	  for(initialize iterator, condition, incrementor)
	  for(var i = roster.length -1; i>= 0; i -= 1){
	
	  }
	  */
	  roster.forEach(function(roster, index, array){
	  	console.log(roster);
	  });
})();
