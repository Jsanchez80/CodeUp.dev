(function(){//1. 
var string

for(var i = 1; i <= 10; i ++){
	 string  = i.toString()
	 string = string.repeat(i)	
	if (i == 10){
	 string = "0"
	 string = string.repeat(i)
	}
	console.log(string)
}

////////////////////////////////////////////////////////////////////////////////
//2. 

// This is how you get a random number between 1 and 10
var number = Math.floor(Math.random() * 10) + 1;


	//for (var i = number; i < 11; i ++){
	//	console.log(number + ' x ' sameNumber ' = ' number * sameNumber)
//}
for(var i =1; i <= 10; i ++){
	
	console.log(number + "x" + i + " = " + i * number)

	
}

// This is how you get a random number between  and 100

//////////////////////////////////////////////////////////////////////////////////

//Placing your variable out here only generates the same number, for example 16, 10 times giving you one output
//3. 
for (var i = 1; i <= 10; i ++){
	//place the variable identifier within the formla to generate a number over and over
	var number = Math.floor(Math.random() * 200) + 20;
	if (number % 2 == 0){
		console.log(number + "is an even number");
	}

	else {
		console.log(number + "is an odd number.")
	}
	
}
 
/*var No = 100

for (var i = 1; i <= 10; i ++){
if	var number = No - 5;
	console.log(No - number )
*/

for (var i = 100; i >5; i-=5){
	console.log(i)
}
})();