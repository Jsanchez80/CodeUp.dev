	(function() {
			"use strict";

		// Set the map options
			var mapOptions = {		
			zoom: 8,// Set the zoom level
			center: {// This sets the center of the map at our location
			lat:  29.4950575, //29.5195728 coordinates for my fave restaurant(lat)
			lng: -98.5584247
			  //-98.5046304 coordinates for my fave restaurant(long)
			},
			mapTypeId: google.maps.MapTypeId.HYBRID
};
			/////////////// Draw/display your map//////////////////////////////////////////////////////////////////////////////////////////
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//////////////// Include code from previous example///////////////////////////////////////////////////////////////////////////
			var address = "6851 Citizens Pkwy #100, San Antonio, TX 78229";//Set the address of your favorite resturaunt (in San Antonio) to geocode
			var geocoder = new google.maps.Geocoder();// Init geocoder object
				geocoder.geocode({ "address": address }, function(results, status) {// Geocode our address
			if (status == google.maps.GeocoderStatus.OK) {// Check for a successful result
				map.setCenter(results[0].geometry.location);// Recenter the map over the address
			} else {// Show an error message with the status if our request fails
				alert("Geocoding was not successful - STATUS: " + status);
			}

			var windowText = '<div id = "content">'+
			'<div id = "sideNotice"></div>'+
			'<h1 id="firstHeading" class="firstHeading">Giordanos</h1>'+'<div id = "bodyContent">'+'<p><b>Giordanos</b>, known for their <em>Famous Stuffed Deep Dish Pizza</em>, is located in Chicago, Il with several units throughout the suburbs and Chicago Metropolis.</p>'+'<a href="https:giordanos.com"></a>'+'</div>'+'</div>';

			var marker = new google.maps.Marker({//Where you want your marker to show
				position: {lat: 29.4950575, lng: -98.5584247
},
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


