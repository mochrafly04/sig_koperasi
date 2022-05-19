<header class="ex-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h1>MAP</h1>
      </div>
    </div>
  </div>
</header>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h5>PETA SEBARAN KOPERASI KABUPATEN SUBANG</h5>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
      <div id="map" style="height: 500px;"></div>


<script>
    var map = L.map('map').setView([-6.5561268,107.7301221], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
</script>
      </div>
    </div>
  </div>
</div>

<br>