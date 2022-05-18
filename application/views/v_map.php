<div id="map" style="height: 500px;"></div>


<script>
    var map = L.map('map').setView([-6.5561268,107.7301221], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
</script>