var map= new google.maps.Map(document.getElementById("my-map"), {
        zoom: 14,
        center: {// position of codeup
        lat:  29.426791,
        lng: -98.489602
    }
});

var geocoder = new google.maps.Geocoder();
geocoder.geocode({ address: 'austin' }, function(res, status) {
    // Check for a successful result
    if (status == google.maps.GeocoderStatus.OK) {
        map.setZoom(4);
        for(var i = 0; i < res.length; i += 1) {
            var marker = new google.maps.Marker({
                position: res[i].geometry.location,
                map: map
            });
            var infoWindow = new google.maps.InfoWindow({
                content: res[i].formatted_address
            });
            inforWindow.open(map, marker);
        }
    } else {
        // Show an error message with the status if our request fails
        alert("Geocoding was not successful - STATUS: " + status);
    }
});

document.getElementById('zoom-btn').addEventListener('click', function(e){
    var zoomLevel = document.getElementById('change-zoom').value;
    map.setZoom(parseInt(zoomLevel));
});
