<div class="row">
    <div class="col-sm-6">
    <?php echo form_open('koperasi/tambah'); ?>
        <div class="form-group">
            <label for="badan_hukum">Nomor Badan Hukum</label>
            <input type="text" name="badan_hukum" class="form-control" id="badan_hukum">
            <small class="form-text text-danger"><?= form_error('badan_hukum'); ?></small>
        </div>
        <div class="form-group">
            <label for="nama_koperasi">Nama Koperasi</label>
            <input type="text" name="nama_koperasi" class="form-control" id="nama_koperasi">
            <small class="form-text text-danger"><?= form_error('nama_koperasi'); ?></small>
        </div>
        <div class="form-group">
            <label for="jenis_koperasi">Jenis Koperasi</label>
            <select class="form-control" id="jenis_koperasi" name="jenis_koperasi">
            <option value="Kop Pensiunan Abri">Kop Pensiunan Abri</option>
            <option value="Kop Konsumen">Kop Konsumen</option>
            <option value="Kop Peternakan">Kop Peternakan</option>
            <option value="Kop Pasar">Kop Pasar</option>
            <option value="Kop Serba Usaha">Kop Serba Usaha</option>
            <option value="Kop Pesantren">Kop Pesantren</option>
            <option value="KPRI">KPRI</option>
            <option value="Kop Karyawan">Kop Karyawan</option>
            <option value="Kop Wanita">Kop Wanita</option>
            <option value="Kop Gapoktan">Kop Gapoktan</option>
            <option value="Kop Peternakan">Kop Peternakan</option>
            <option value="Kop Lainnya">Kop Lainnya</option>
            <option value="Kop Simpan Pinjam">Kop Simpan Pinjam</option>
            <option value="Kop Mandiri Pangan">Kop Mandiri Pangan</option>
            <option value="Kop Perikanan">Kop Perikanan</option>
            <option value="KUD MINA">KUD MINA</option>
            <option value="Kop Produsen">Kop Produsen</option>
            <option value="Kop Warga">Kop Warga</option>
            <option value="Kop Pasar">Kop Pasar</option>
            <option value="Kop Jasa">Kop Jasa</option>
            <option value="KOPINKRA">KOPINKRA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status_koperasi">Status Koperasi</label>
            <select class="form-control" id="status_koperasi" name="status_koperasi">
            <option value="Aktif">Aktif</option>
            <option value="Perlu Pembinaan">Perlu Pembinaan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="desa">Desa</label>
            <input type="text" name="desa" class="form-control" id="desa">
            <small class="form-text text-danger"><?= form_error('desa'); ?></small>
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" id="kecamatan">
            <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
        </div>
        <div class="form-group">
            <label>latitude</label>
            <input class="form-control" name="latitude" id="Latitude">
        </div>
        <div class="form-group">
            <label>longitude</label>
            <input class="form-control" name="longitude" id="Longitude">
        </div>
        <div class="custom-file">
            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
            <input type="file" name="gambar" class="custom-file-input" id="customFile">
        </div><br>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea type="text" name="keterangan" class="form-control" id="keterangan"></textarea>
            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
        </div>
        <button type="submit" name="tambah" class="btn btn-success float-right">Simpan</button>
        <button type="reset" name="reset" class="btn btn-danger float-right">Reset</button>
        <?php echo form_close(); ?>
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


