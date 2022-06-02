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
        <h5>PETA SEBARAN KOPERASI KABUPATEN SUBANG</h5><br>
      
        <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
      
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
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

    var map = L.map('map', {
		center: [-6.5561268,107.7301221],
		zoom: 10,
		layers: [peta1],
	});

    var baseLayers = {
		'Peta 1': peta1,
    'Satelite': peta2,
    'Street': peta3,
    'Dark': peta4
	};

    var layerControl = L.control.layers(baseLayers).addTo(map);

    <?php foreach ($lokasi as $l => $value) { ?>
      L.marker([<?php echo $value->latitude ?>, <?php echo $value->longitude ?>])
      .bindPopup("<b><?= $value->nama_koperasi ?></b><br>"+
      "Jenis Kop : <?= $value->jenis_koperasi ?><br>"+
      "Status : <?= $value->status_koperasi ?><br>" +
      "<a href='<?= base_url('fdetail/'. $value->id_koperasi) ?>'>Detail<a>").addTo(map);
    <?php } ?>
</script>

      </div> 
    </div> 
  </div> 

<br>