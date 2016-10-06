 var myMap = document.getElementById('myMap');
 va mapOptions = {
 zoom: 18,
 //position of codeup
 	center: {
 	lat: 29.426791,
 	lng: -98.489602
 	}
 };
 var map = new google.maps.map(myMap,mapOptions);

 Marker and info windows
 var codeup = {lat: 29.426791, lng: -98.489602};
 var inflow = new google.maps.InfoWindow({
 	content: "Changing the World"
 })
 var marker;
 document.getElementById('place-marker').addEventListener('click', function(e){
 	marker = new google.maps.Marker({
 		position: codeup,
 		map: map
 	});
 });

 document.getElementById('open-info-window').addEventListener('click', function(e){
 	//......need to finish getting this code.
 }