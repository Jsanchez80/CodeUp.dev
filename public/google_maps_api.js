(function() {
        	"use strict";

        // Set the map options
		        var mapOptions = {
		            // Set the zoom level
		            zoom: 19,

		            // This sets the center of the map at our location
		            center: {
		                lat:  29.426791,
		                lng: -98.489602
		            }
		        };

		        // Draw/display your map
		        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		    })();

var geocoder = new google.maps.Geocoder();
//The Geocoder object has a method .geocode.

geocode(request:GeocoderRequest, callback:function(Array.<GeocoderResult>, GeocoderStatus){

}
// Include code from previous example

// Set the address of your favorite resturaunt (in San Antonio) to geocode
var address = "602 NW Loop 410  Suite #146, San Antonio, TX 78216";

// Init geocoder object
var geocoder = new google.maps.Geocoder();

// Geocode our address
geocoder.geocode({ "address": address }, function(results, status) {

   // Check for a successful result
   if (status == google.maps.GeocoderStatus.OK) {

       // Recenter the map over the address
       map.setCenter(results[0].geometry.location);
   } else {

       // Show an error message with the status if our request fails
       alert("Geocoding was not successful - STATUS: " + status);
   }
});