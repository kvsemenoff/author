<div id="map"></div>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 59.940585, lng: 30.333680},
    zoom: 16
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
