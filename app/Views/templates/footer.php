  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SEAngle Breath</h3>
              <p>
                <strong>Email:</strong>support@seanglebreath.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/seanglebreathfreediving" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/seanglebreath/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-info melchanovs-center">
              <a target="_blank" href="https://molchanovs.com/pages/molchanovs-instructor-map?fbclid=IwAR0cov-djsdKVcxzaIiRo2NCgRyKVLkcrPQwFFYLcrWp4HcNk6CdDnScOzo#instructor-map/by-search-term/instructor-details/5df36b6f22cbb900159ac670/">
                <img width="200" src="https://static.tildacdn.com/tild6264-3232-4464-a335-306264653034/logoMolchanovsWhate.png" alt="Melchanovs Logo">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4>Social Links</h4>
            <div class="footer-info">
              <p>
                <a href="https://www.facebook.com/seanglebreath" style="color:#fff;text-decoration:underline;">Seangle Breath Freediving PH</a>
              </p>
              <p>
                <a href="https://www.facebook.com/groups/1739752889505785" style="color:#fff;text-decoration:underline;">Wave By Wave Freediving Club</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; SEAngle Breath. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">CFT Development</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url('assets')?>/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets')?>/js/main.js"></script>

  <script type="text/javascript">
    $(window).scroll(function() {
        $('header').toggleClass('scrolled',$(this).scrollTop() > 50);
    });
  </script>

  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      default:4,
      nav:false,
      autoplay:true,
      autoplayTimeout:5000,
      margin : 10,
      loop:true,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
      }
    });

    /* HQ images */
    let productImg = document.querySelector("#product-img");
    let smallImg = document.querySelectorAll('.small-img');
    smallImg[0].onclick = function() {
      productImg.src= smallImg[0].src;
    }
    smallImg[1].onclick = function() {
      productImg.src= smallImg[1].src;
    }
    smallImg[2].onclick = function() {
      productImg.src= smallImg[2].src;
    }
    smallImg[3].onclick = function() {
      productImg.src= smallImg[3].src;
    }

    $('#product-img').click(function() {
        $('.modal').modal('show');
        $('#popup-img').attr('src',$(this).attr('src'));
    });
    /* HQ images */
  </script>
</body>

</html>
