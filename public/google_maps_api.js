	(function() {
			"use strict";

		// Set the map options
			var mapOptions = {		
			zoom: 8,// Set the zoom level
			center: {// This sets the center of the map at our location
			lat:  41.8336479, //29.5195728 coordinates for my fave restaurant(lat)
			lng: -87.8722387  //-98.5046304 coordinates for my fave restaurant(long)
			},
			mapTypeId: google.maps.MapTypeId.HYBRID
};
/////////////// Draw/display your map//////////////////////////////////////////////////////////////////////////////////////////
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//////////////// Include code from previous example///////////////////////////////////////////////////////////////////////////
			var address = "5159 S Pulaski Rd, Chicago, IL 60632";//Set the address of your favorite resturaunt (in San Antonio) to geocode
			var geocoder = new google.maps.Geocoder();// Init geocoder object
				geocoder.geocode({ "address": address }, function(results, status) {// Geocode our address
			if (status == google.maps.GeocoderStatus.OK) {// Check for a successful result
				map.setCenter(results[0].geometry.location);// Recenter the map over the address
			} else {// Show an error message with the status if our request fails
				alert("Geocoding was not successful - STATUS: " + status);
			}
///////////// var image = {  Using an icon to replace the marker with a Pizza Icon...////////////////////////////////////////
			// 	url:'http://icons.iconarchive.com/icons/sonya/swarm/32/Pizza-icon.png';
			// 	size: new google.maps.Size(71, 71),
			// 	origin: new googe.maps.Point(0, 0),
			// 	anchor: new google.maps.Point(17, 34),
			// 	scaledSize: new google.maps.Size(25,25)
//////////// };   Creating drag type marker to have guests drag to a location similar to mapping your route...//////////////
			// var myLatlng = new google.maps.LatLng(41.798862,-87.722519);
			// var mapOpttions = {
			// 	zoom: 8,
			// 	center: myLatlng
			// } 
			// var maps = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			// var maps = new google.maps.Marker({
			// 	position: myLatlng,
			// 	maps: maps
			// 	draggable: true,
			// 	title:"Drag me!"
			// })
			var windowText = '<div id = "content">'+
			'<div id = "sideNotice"></div>'+
			'<h1 id="firstHeading" class="firstHeading">Giordanos</h1>'+'<div id = "bodyContent">'+'<p><b>Giordanos</b>, known for their<em>Famous Stuffed Deep Dish Pizza</em>,is located in Chicago, Il with several units throughout the suburbs and Chicago Metropolis.</p>'+'<a href="https:giordanos.com"></a>'+'</div>'+'</div>';

			var marker = new google.maps.Marker({//Where you want your marker to show
				position: {lat: 41.798862, lng: -87.722519},
				animation: google.maps.Animation.BOUNCE, //Info on this operation can be found at https://developers.google.com/maps/documentation/javascript/markers
				map: map
				// icon: image
			})	
			 var infowindow = new google.maps.InfoWindow({
    			content: windowText	
    });	

    			marker.addListener('click', function() {
    			infowindow.open(map, marker)
	});	
						
  });
})();


