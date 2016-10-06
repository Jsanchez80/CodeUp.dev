'use strict'

/*var myArray = [1,2,3,4];

var randomIndex = Math.floor(Math.random() * myArray.length);

console.log(myArray[randomIndex]);

Split Method:s
'1,2,3,4,5'.split(',') press enter in the console and it will display your array

you could also use:

'1 2 3 4 5'.split(' ') press enter in the console and it will display your array

'1codeup2codeup3codeup4codeup5'.split('codeup') press enter in the console and it 	will display the following on your console
	["1", "2", "3", "4", "5"] as an array

you can split a word up to turn the string(word) into an array
		'codeup.split'('')
Join Method:
[1,2,3].join (' *** ') press enter in the console and it will display
"1 *** 2 *** 3"



var myString = 'Codeup';

var stringAsArray = myString.split('')

var arrayReversed = stringAsArray.revers();

var reversedString= arrayReversed.join('');

console.log(reversedString)
*/


//sum the digits in a number
//turn my number into a string
//turn that string into an array of digits
//loop throu that array and add together the digits

var number = 123;
var numberString = number.toString();
var numberArray = numberString.split('');
var sum = 0;

numberArray.forEach(function(number){
	sum += parseInt(number);
});
	return sum;
}
