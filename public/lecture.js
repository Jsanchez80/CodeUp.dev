'use strict'
(function(){
// maybe google 'javascript repeat a string'
//count 10 to 1
var i = 10

while (i > 0) {
console.log(i);
	i -= 1;
}

// same as

//count from 10 to 1
for (var i = 10; i > 0; i -= 1){
	console.log(i)
}

/////////////////////////////////////////////////////////////////////////

//for loop syntax
//for (/*place your initial statement in this space*/; /*your condition*/; /* statement evaluated after earch iteration*/)

	//body
//}

//for (var i = 0; i <= 2; i += 1){
//	console.log(i);



//create a script that runs an output for a clock from 1pm -5pm in a format
//similar to this:
// 1 hours 0 minutes


for (var i = 1; i <= 5; i +=1){

	for(var j = 0; j <= 59; j += 1) {
		console.log(i + ':' + j);
	}
}	
})();