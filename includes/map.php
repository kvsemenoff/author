<div id="map"></div>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 59.9343, lng: 30.3351},
    zoom: 20
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
