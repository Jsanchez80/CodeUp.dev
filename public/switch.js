var luckyNumber = Math.floor(Math.random()*6)

var No1 = .10; 
var No2 = .25;
var No3 = .35; 
var No4 = .50; 
var No5 = 60;

switch (luckyNumber) {
	case 0:
		console.log("You did not received a discount today."); 
		break;
	case 1:
		console.log("You saved 10% today. You're total for today is $" + 60 * No1);
		break;

	case 2:
		console.log("You saved 25% today. You're total for today is $" + 60 * No2);
		break;
	
	case 3:
		console.log("You saved 35% today. You're total for today is $" + 60 * No3);
		break;

	case 4:
		console.log("You saved 50% today. You're total for today is $" + 60 * No4);
		break;
	case 5:
		console.log("You saved 100% today. You're total for today is $" + 60 - No5);
			break;
}

var luckyNumber = Math.floor(Math.random()*12)

switch (luckyNumber) {
	case 0:
		console.log("Are you Mayan? Dude, I have no clue what Month you think this is...better call Lil' Wayne!");
		break;
	case 1:
		console.log("January");
		break;
	case 2:
		console.log("February");
		break;
	case 3:
		console.log("March");
		break;
	case 4:
		console.log("April");
		break;
	case 5:
		console.log("May");
		break;
	case 6:
		console.log("June")
		break;
	case 7:
		console.log("July");
		break;
	case 8:
		console.log("August")
		break;
	case 9:
		console.log("September");
		break;
	case 10:
		console.log("October");
		break;
	case 11:
		console.log("November");
		break;
	case 12:
		console.log("December");
		break;
}
