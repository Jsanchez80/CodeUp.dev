"use strict";

//Chapter 4.1.1. ID Selector
////////Question 3: Use jQuery to select an element by the id. Alert the contents of the element. 
		// $(document).ready(function() {
		//     var contents = $('#heckaCoo'); 
		//     alert(contents.html());
		// });
///////Question 4 Update the jQuery code to select and alert a different id. 
		// $(document).ready(function() {
  //           var contents = $('#codeup'); 
  //           alert(contents.html());
  //       });
/////////Queston 5 Use the same id on 2 elements. How does this change the jQuery selection?
		// $(document).ready(function() {
  //           var contents = $('#codeup'); 
  //           alert(contents.html());
  //       });
  ////////Answer: it changes the way the page loads: the first alert pops up and loads chronologically according to operation. 
  //after clicking the prompt, the page loads the next pop up but halts execution of remaining tasks until you close the prompt. 
  //////////////////////////////////////////////////////////////////////////////////////
		///
//////////Question 6 Remove the duplicate id. Each id should be unique on that page.
  //<h1 id="codeup">Hella Gud!</h1>		
  //<h1 id="codeup">Hello Codeup!</h1>
  //changed to :
  //<h1 id="codeup">Hella Gud!</h1>
  //<h1 id="ohLawd">Hello Codeup!</h1>

//////////////New Chapter////////////////New Chapter////////////////////////

//Chapter 4.1.2. Class Selector

// 1. Remove your custom jQuery code from previous exercises.
// 2. Update your code so that at least 3 different elements have the same class named hellaHaute.
// 3. Using jQuery, create a border around all elements with the class codeup that is 1 pixel wide and red.
		// 	$(document).ready(function() {
		//  $('.hellaHaute').css('border', '1px solid red');

// 4. Remove the class from one of the elements. Refresh and test that the border has been removed.
		 $(document).ready(function() {
		 $('.hellaHaute').css('border', '1px solid red');

// 5. Give another element an id of codeup. Does this element get a border now
		//  <div class="hellaHaute">
		//  <h2>Hella Great!!!</h2>
///////////////////////New Chapter/////////////////////////////////////////

//Chapter 4.1.3. Element Selector
// 1. Remove your custom jQuery code from previous exercises.

// 2. Using jQuery, set the font-size of all li elements to 20px.
		 $(document).ready(function() {
         $('li').css('font-size','20px');
	});
// 3. Craft selectors that highlight all the h1, p, and li elements with a yellow background.
		 $(document).ready(function() {
         $('.important').css('background-color', 'orange');
	});
// 4. Create a jQuery statement to alert the contents of your h1 element(s).
				// $(document).ready(function() {
		 	//     var contents = $('#codeup'); 
			 //    alert(contents.html());
});