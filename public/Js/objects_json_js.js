'use strict';

// todo:
// Create an array of objects that represent books.
var library = [

{
		"Title": "Relentless: ",
		"Subtitle": "From Good To Great To Unstoppable",
		"Published": "March 2014",
		"Author": {
		"firstName": "Tim S.",
		"lastName": "Grover"
		}
	},
{
		"Title": "David And Goliath: ",
		"Subtitle": "Underdogs, Misfits, And The Art Of Battling Giants",
		"Published": "October 2013", 
		"Author": {
		"firstName": "Malcom",
		"lastName": "Gladwell"
		}
	},
{
		"Title": "UnLabel: ",
		"Subtitle": "Selling You Without Selling Out ",
		"Published": "October 2013", 
		"Author": {
		"firstName": "Marc",
		"lastName": "Ecko"
		}
	},
{
		"Title": "Use what you've got: ",
		"Subtitle": "& Other Business Lessons I Learned from My Mom!",
		"Published": "February 2003", 
		"Author": {
		"firstName": "Barbara",
		"lastName": "Corcoran"
		}
	},
{
		"Title": "The Power of Broke: ",
		"Subtitle": "How Empty Pockets, a Tight Budget, and a Hunger for Success Can Become Your Greatest Competitive Advantage",
		"Published": "January 2016", 
		"Author": {
		"firstName": "Daymond",
		"lastName": "John"
		}
	}
	];
	



// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

// log out the books array
console.log(library);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

   library.forEach(function(element, index){
    console.log("Library #" + index);
	console.log("Title: " + element.Title + ' ' + element.Subtitle );
    console.log("Author" + element.Author.firstName + ' ' + element.Author.lastName);
    console.log("---");
});
// end loop here 

