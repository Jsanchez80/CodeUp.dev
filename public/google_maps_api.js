	(function() {
			"use strict";

		// Set the map options
			var mapOptions = {		
			zoom: 19,// Set the zoom level
			center: {// This sets the center of the map at our location
			lat:  29.426791, //29.5195728 coordinates for my fave restaurant(lat)
			lng: -98.489602  //-98.5046304 coordinates for my fave restaurant(long)
			},
			mapTypeId: google.maps.MapTypeId.HYBRID
};
/////////////// Draw/display your map///////////////////////////////////////////////
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//////////////// Include code from previous example/////////////////////////////////
			var address = "5159 S Pulaski Rd, Chicago, IL 60632";//Set the address of your favorite resturaunt (in San Antonio) to geocode
			var geocoder = new google.maps.Geocoder();// Init geocoder object
				geocoder.geocode({ "address": address }, function(results, status) {// Geocode our address
			if (status == google.maps.GeocoderStatus.OK) {// Check for a successful result
				map.setCenter(results[0].geometry.location);// Recenter the map over the address
			} else {// Show an error message with the status if our request fails
				alert("Geocoding was not successful - STATUS: " + status);
			}
			var giordanos = {lat: 41.798862, lng: -87.722519};
			var marker = new google.maps.Marker({//Where you want your marker to show
				position: giordanos,
				map: map
			})	
			var infowindow = new google.maps.InfoWindow({
    			content: "<h3><em>They Gotcha' Beef</em></h3><h5>Known for their <em>Famous Stuffed Deep Dish Pizza!You're sure to love the Special...</em</h5>"

    			
    		});	
    			infowindow.open(map, marker)
	});	
				
})();


