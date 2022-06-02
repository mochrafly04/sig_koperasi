    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-col first">
              <h6>Dinas Koperasi UMKM Perindustrian Perdagangan dan Pasar</h6>
              <p class="p-small">Website resmi.</p>
            </div> <!-- end of footer-col -->
            <div class="footer-col second">
              <h6></h6>
              <ul class="list-unstyled li-space-lg p-small">
                <li></li>
              </ul>
            </div> <!-- end of footer-col -->
            <div class="footer-col third">
              <span class="fa-stack">
                <a href="https://www.instagram.com/dkupp_subang/" onClick="" target="_blank">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
              </span>
              <p class="p-small">Contact email <a href=""><strong>contact@site.com</strong></a></p>
            </div> <!-- end of footer-col -->
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">Copyright © <a href="#your-link">DKUPP 2021</a></p>
          </div> <!-- end of col -->
        </div> <!-- enf of row -->

      </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/js') ?>/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('assets/js') ?>/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url('assets/js') ?>/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url('assets/js') ?>/scripts.js"></script> <!-- Custom scripts -->
    <script src="<?= base_url('assets/js') ?>/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js.map"></script>
    
    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzDwniLMnN7NkiJ42wUVFAqeGHYckEePsqBjADalwf_TY_vRx8zSHSXZk2kW4cP2VSpkg/exec'
  const form = document.forms['Contact']

  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');


  form.addEventListener('submit', e => {
    e.preventDefault()
    // ketika tombol submit di klik
    // tampilkan tombol loading hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');

    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
    // tampilkan tombol kirim hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
    // tampilkan alert
    myAlert.classList.toggle('d-none');
    //reset form
    form.reset();
        console.log('Success!', response)})
      .catch(error => console.error('Error!', error.message))
  })
</script>

  </body>

    </html>