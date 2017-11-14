function addSearchBox(map)
{
    var searchBox = new google.maps.places.SearchBox(document.getElementById("searchmap"));
    google.maps.event.addListener(searchBox, "places_changed", function () {
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;
        for (i = 0; place = places[i]; i++) {
            bounds.extend(place.geometry.location);
            //marker_0.setPosition(place.geometry.location);
        }
        map.fitBounds(bounds);
        map.setZoom(15);
    });
}