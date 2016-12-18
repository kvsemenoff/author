<div id="map"></div>
    <script>

var map;

var myLatLng = {lat: 59.940585, lng: 30.333680}

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 16
  });

  var image = 'img/dc-marker.png';
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image
  });

}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
