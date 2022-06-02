<header class="ex-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h1>DETAIL</h1>
      </div>
    </div>
  </div>
</header>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h5>DATA KOPERASI</h5>

    <div class="row">
    <div class="col-sm-8">
    <div class="col-sm-8">
            <div class="panel panel-success">
                <div class="panel heading"></div><br>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor Badan Hukum</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['badan_hukum']?></td>
                                </tr>
                                <tr>
                                    <th>Nama Koperasi</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['nama_koperasi']?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Koperasi</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['jenis_koperasi']?></td>
                                </tr>
                                <tr>
                                    <th>Status Koperasi</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['status_koperasi']?></td>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['desa']?></td>
                                </tr>
                                <tr>
                                    <th>kecamatan</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['kecamatan']?></td>
                                </tr>
                                <tr>
                                    <th>Latitude</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['latitude']?></td>
                                </tr>
                                <tr>
                                    <th>Longitude</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['longitude']?></td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>:</th>
                                    <td><?= $data_koperasi['keterangan']?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-sm-4">
        <div id="map" style="height: 350px;"></div>
    </div>
</div>


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

    var latInput = document.querySelector("[name=Latitude]");
   var lngInput = document.querySelector("[name=Longitude]");

   var curLocation = [-6.5561268,107.7301221];

   map.attributionControl.setPrefix(false);

   var marker = new L.marker(curLocation, {
       draggable: true
    });


    //mengambil koordinat saat marker digeser
    marker.on('dragend', function(e){
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            curLocation
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng);
    });

    //mengambil koordinat saat map di klik
    map.on("click",function(e){
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        }else{
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    }); 

    map.addLayer(marker);
</script>




        

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div>

<br>