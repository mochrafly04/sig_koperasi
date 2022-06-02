<div class="row">
    <div class="col-sm-6">
        <div class="card-body">

            <form action="" method="post">
                <input type="hidden" name="id_koperasi" value="<?= $data_koperasi['id_koperasi']; ?>">
            <div class="form-group">
                <label for="badan_hukum">Nomor Badan Hukum</label>
                <input type="text" name="badan_hukum" class="form-control" id="badan_hukum" value="<?= $data_koperasi['badan_hukum']; ?>">
                <small class="form-text text-danger"><?= form_error('badan_hukum'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama_koperasi">Nama Koperasi</label>
                <input type="text" name="nama_koperasi" class="form-control" id="nama_koperasi" value="<?= $data_koperasi['nama_koperasi']; ?>">
                <small class="form-text text-danger"><?= form_error('nama_koperasi'); ?></small>
            </div>
            <div class="form-group">
                <label for="jenis_koperasi">Jenis Koperasi</label>
                <select class="form-control" id="jenis_koperasi" name="jenis_koperasi">
                <?php foreach($jenis_koperasi as $jk) : ?>
                <?php if($jk == $data_koperasi['jenis_koperasi']) : ?>
                    <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                <?php else : ?>
                    <option value="<?= $jk; ?>"><?= $jk; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="status_koperasi">Status Koperasi</label>
                <select class="form-control" id="status_koperasi" name="status_koperasi">
                <?php foreach($status_koperasi as $sk) : ?>
                <?php if($sk == $data_koperasi['status_koperasi']) : ?>
                    <option value="<?= $sk; ?>" selected><?= $sk; ?></option>
                <?php else : ?>
                    <option value="<?= $sk; ?>"><?= $sk; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="desa">Desa</label>
                <input type="text" name="desa" class="form-control" id="desa" value="<?= $data_koperasi['desa']; ?>">
                <small class="form-text text-danger"><?= form_error('desa'); ?></small>
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $data_koperasi['kecamatan']; ?>">
                <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" name="latitude" class="form-control" id="Latitude" value="<?= $data_koperasi['latitude']; ?>">
                <small class="form-text text-danger"><?= form_error('latitude'); ?></small>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" name="longitude" class="form-control" id="Longitude" value="<?= $data_koperasi['longitude']; ?>">
                <small class="form-text text-danger"><?= form_error('longitude'); ?></small>
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                <input type="file" name="gambar" class="custom-file-input" id="gambar" value="<?= $data_koperasi['gambar'] ?>">
            </div><br>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $data_koperasi['keterangan']; ?>">
                <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
            </div>
            <button type="submit" name="ubah" class="btn btn-success float-right">Simpan</button>
            </form>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="map" style="height: 500px;"></div>
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

