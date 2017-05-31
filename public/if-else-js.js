
"use strict"



console.log("testing");

function sum(5,3){
	return a + b;
}

// (function(){
// var total = 70 + 80 + 95 / 3;
// var message;

// if(total > 80) {
// 	console.log ("You are awesome!");
// } else {
// 	console.log ("You need more practice.");
// }
// // takes in 3 grades, calculates average, checks average vs passing
// function grades(grade1, grade2, grade3){
// 	var averageGrade = grade1 + grade2 + grade3 / 3
	
// 	if(averageGrade > 80) {
// 		message = "You are awesome!";
// } else {
// 		message = "You need more practice.";
// }
// 	return message;
// }

// console.log(averageGrade(75, 80, 95) / 3);
// console.log(averageGrade(95, 100, 100) / 3);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var person = "Cameron";
var purchased = 180;
var discount = 0.35;
var finalTotal;
var total;


if (total > 200) {
	console.log (person + "Bought $" + purchased + "You saved" + (purchased * discount) + "Final Total is" + finalTotal);
	
} else {
	finalTotal = purchased;
	console.log(person + "bought $" + purchased + " and did not get a discount. Final total is " + finalTotal)
}

var person = "Ryan";
var purchased = 250;
var discount = 0.35;
var finalTotal;
var total;


if (total > 200) {
	console.log (person + "Bought $" + purchased + "You saved" + (purchased * discount) + "Final Total is" + finalTotal);
	
} else {
	finalTotal = purchased;
	console.log(person + "bought $" + purchased + " and did not get a discount. Final total is " + finalTotal);
}

var person = "George";
var purchased = 320;
var discount = 0.35;
var finalTotal;
var total;


if (purchased > 200) {
	console.log (person + "Bought $" + purchased + "You saved" + (purchased * discount) + "Final Total is" + finalTotal);
	
} else {
	finalTotal = purchased;
	console.log(person + "bought $" + purchased + " and did not get a discount. Final total is " + finalTotal);
} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//exercise 2
//when refactoring existing code into a function
//input - figure out what inputs change and make generally named parameters
//process- we already have the process with the If-else statement
//output - we already have the output, but not in a general form, 
//name the function after what it does or what it returns

//function showPersonSaleAndDiscount(person, purchased discount percentage) {
function showCustomerSale(person, purchased, discount){

	var finalTotal;


	if (purchased >200) {
		finalTotal = purchased - (purchased * discount);
		return (person + "Bought $" + purchased + "You saved" + (purchased * discount) + "Final Total is" + finalTotal)
} else {
	finalTotal = purchased;
	return (person + "bought $" + purchased + " and did not get a discount. Final total is " + finalTotal)
}
	
} 
var result = console.log(showCustomerSale ("zach", 205, 0.35));
// (zach);

console.log(showCustomerSale("Fernando", 210, .035));

var flipCoin = Math.floor(Math.random() * 2);
if(flipCoin == 0){
	console.log("buy a car");
} else {
	console.log("buy that house");
}
// shouldBuyHouseOrCar();
// shouldBuyHouseOrCar();
// shouldBuyHouseOrCar();


function flipCoin() {
	var flipCoin = Math.floor(Math.random() * 2);
	return flipCoin;
}
// ();