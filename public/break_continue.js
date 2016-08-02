(function(){//Griffendor
//slytherin
//hufflepuff
//ravenclaw

/*var house = "Griffendor"
	switch(house){
		case "Griffendor":
			console.log("known for their integrity, strength, and courage")
		break;

		case "Slytherin":
			console.log("Evil Bastards")
		break;

		case "Hufflepuff":
			console.log("Being red shirts")
		break;

		case "Ravenclaw":
			console.log("Smart Asses")
		break;

	}*/

var number = Math.floor(Math.random()*50) + 1;
console.log("number to skip is " + number)

for (var i = 1; i < 50; i++){
	if (i % 2 == 0){
		if(i ==23)
		console.log("Yikes, Skipe Me!")
		continue; 

	
	}console.log("Hi I'm odd!" + i);
		

}
	
})();

	


