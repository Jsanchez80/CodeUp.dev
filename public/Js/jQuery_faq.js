/* JavaScript Code to develop a slideshow on jQuery_faq.html page...*/ 
/*I found the code for the slide show here: http://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_self*/

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
} console.log("helloWorld")

$(document).ready(function (){
	$('dd').addClass('invisible');
});

$('#toggle-answers').click(function () {
	$('dd').toggleClass('invisible');
});

/* this will allow you to grab an unordered list and change attributes
	it states grab the ul, for each ul seek the first child(li) and 
	change the css font-weight to bold
$('ul').each(function() {
	$(this).children().first().css('font-weight', 'bold');
});*/

/*grab from the parent ul and add .invisible to any of the li when they are clicked
grab the ul, for each ul, seek the parent ul and find each li and change style to .invisible when clicked
> = Incorrect
>$('ul').each function {
>	$(this).parent('ul').each('li').css('.invisible');
}
*/
$('li').click(function(){
	$(this).parent().addClass("alto")
});