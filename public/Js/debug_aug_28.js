// uncomment the following exercises as you complete the preceding ones

//---------------------------------- 1 ---------------------------------------- 

// change the text of the main heading.
var heading = document.getElementById("main-heading").innerText = "Good Morning Lassen!";
	alert("did this work")

	// j query format
// 	var $heading = $('#main-heading')
// 		$heading.text("my tool store")
// //---------------------------------- 2 ---------------------------------------- 
	
// why isn't the click listener working?
	document.getElementById('my-btn').addEventListener("click", buttonPushed);

	function buttonPushed () {

    	alert('you clicked the button!');
}

	// $('#my-btn').click(buttonPushed());
// j query format

//---------------------------------- 3 ---------------------------------------- 

// `inventory.json` refers to the same file we worked with in the ajax request example
// why am I not seeing my products on the page?
// function showInventory (products) {
//  function showInventory (products){
//     var contents = '';

//     products.forEach(function(product){
//         contents += '<div class="col-md-4">';
//         contents += '<h2>' + product.name + '</h2>';
//         contents += '<ul>';
//         product.categories.forEach(function(category){
//             contents += '<li>' + category + '</li>';
//         });
//         contents += '</ul>';
//         contents += '<p>$' + product.price + '</p>';
//         contents += '<p>We only have ' + product.quantity + 'left!</p>';
//         contents += '</div>';
//     });

//     $('#products').html(contents);


// $.get('/inventory.json').done(showInventory);

