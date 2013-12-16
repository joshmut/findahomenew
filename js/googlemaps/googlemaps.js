/*
	Document	:	googlemaps.js
	Created		:	10/12/2013 2:05PM
	Author		:	chegzcol
*/
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-1.285293,36.822631)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);