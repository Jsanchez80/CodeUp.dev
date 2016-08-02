'use strict';
(function(){
//An ice cream seller can't go home until she sells all of her cones. Write a JS program 
//that generates a random number between 50 and 100 representing the amount of cones to sell. 
//Your code should generate numbers between 1 and 5, simulating the amount of cones being bought by her clients. 
//Use a do-while loop to log to the console the amount of cones sold to each person. This is how you get the random numbers.

// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
// This is how you get a random number between 1 and 5
var cones = Math.floor(Math.random() * 5) + 1;

//we know that the total cones sold is represented by var allCones; Cones bought is represented by var cones;
//Total cones sold = # of cones bought + # of cones left or
// var allCones = var cones + conesLeft
//if we rewrite this, to solve the problem our equation would look like this
//We will solve for var conesLeft using a do while loop
// Since we don't know the value of var conesLeft we will use the following term to solve
// var i = conesLeft
//	X = allCones - cones





// do sell cones
do { 
	var cones = Math.floor(Math.random() * 5) + 1;

	//write your statements : if i have enough cones subtract cones from allCones: Console.loghow many we solde
	//	var conesLeft = var allCones - var cones
	//else console log ("cant sell you" + cones + "i only have")

	//If I have enough cones, sell them
	if (allCones >= cones){
		console.log("this customer wants " + cones + " ice cream cones.");
			allCones = allCones - cones
	} else {
		//if i don't have enough, don't sell them.
	 
		console.log("Cannot sell you " + cones + " ice cream cones, I only have " + allCones + " ice cream cones.");
	}
	
} while (allCones > 0);
	console.log("Yes! I've sold all my ice cream cones. I'm off like a prom dress!")




var bottles = 99
var allBottles = allBottles - bottles

do{
	var all bottles = bottles - 1

	if (bottles >= passed) 
		console.log(bottles + " Bottles of beer on the wall " + bottles + " bottles of beer. Take one down and pass it around " + passed + "bottles of beer on the wall.");
			bottles = passed 
} while (passed >= 0)
		console.log(passed " Bottles of the beer on the wall " + passed " bottles of beer. I took them all and passed them around " + passed + " time left, I'm hitting the ground")
})();