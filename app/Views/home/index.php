  <?php
    $molchanovsFrancis = "https://molchanovs.com/pages/molchanovs-instructor-map?fbclid=IwAR0cov-djsdKVcxzaIiRo2NCgRyKVLkcrPQwFFYLcrWp4HcNk6CdDnScOzo#instructor-map/by-search-term/instructor-details/5df36b6f22cbb900159ac670/";
    $molchanovsURL = "https://molchanovs.com/";
  ?>
  <!-- ======= Hero Section ======= -->
  <main id="main">
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide  -->
          <?php $imageCount = 1;$imgUrl = "https://images.unsplash.com/photo-1531809112149-c3e8a981f55b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"; ?>
          <?php foreach($carousel as $row): ?>
            <div class="carousel-item <?= $imageCount == 1?'active':'' ?>" style="background: linear-gradient(to bottom, rgba(108 , 108, 255, 0.75), rgba(108 , 108, 255, 0.20)),url(<?= base_url('upload') . '/' . $row['image'] ?>);background-repeat:no-repeat;background-size: cover;background-position: center center;width:100%;">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown"><?= $row['main_text'] ?></h2>
                  <p class="animate__animated animate__fadeInUp"><?= $row['sub_text'] ?> </p>
                  <div>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background:#f5c71a!important;border:none;color:#aaaaa">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <?php $imageCount++; ?>
          <?php endforeach; ?>
        </div><!-- END CAROUSEL-INNER -->

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

    <!-- =======  Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="steelblue">Services</h2>
        </div>

        <div class="row">
        <?php foreach($categories as $row): ?>
            <div class="col-md-4 mb-3">
              <div class="card text-center">
                <a href="/category/<?= $row->id ?>">
                  <img class="card-img-top" src="<?= base_url('upload').'/'.$row->category_image ?>" alt="">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><a href="/category/<?= $row->id ?>" class="steelblue"><?= $row->category_name ?></a></h5>
                  <p class="card-text"><?= strip_tags(word_limiter($row->category_description,20)) ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- <h3 class="d-block text-center">OUR SERVICES</h3> -->
      </div> <!-- container -->
    </section><!-- End Services Section -->


    <!-- ======= why us Section ======= -->
    <section id="testimonial" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="steelblue">WHY US</h2>
        </div>
        <div class="row">
          <div class="owl-carousel owl-theme">

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  Swimmers or <strong>non-swimmers</strong>, max
                  3-4 students per Certified Coach (vs- 5
                  students per Coach)
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  <strong>Traumatic non-swimmers</strong>, strictly
                  max 2 students per Certified Coach,
                  who are truly specialized and
                  experienced handling students with
                  serious trauma (vs- mixing different
                  level of students and apply one-size
                  fits all teaching approach)
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  <strong>With better lesson coverage.</strong>
                  <ul class="steelblue">
                    <li>Ideal is 2 hours dry skills/theory
                    session (vs-1-hour dry session)</li>
                    <li>Fundamentals of Freediving
                    based from World’s Best
                    Freediving Education System.</li>
                  </ul>
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  What are the <strong>untold techniques
                  and knowledge</strong> must be learned by
                  100% beginners from day one.
                  (vs- providing you the out-dated
                  information does limiting yourself to
                  progress & compromising of your own
                  safety)
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  All workshops are conducted by
                  <strong>Certified Molchanovs Instructor.</strong>
                  Certified Master Freediver, Certified
                  Advance Freediver, and Certified Level
                  2 Freedivers.
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  Our coaches are very patient, well
                  equipped, experienced, quite
                  competitive driven and our lessons
                  and approaches are <strong>100% beginner
                  friendly.</strong>
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  <strong>Freedive tour</strong> via boat fun dive is
                  also included on the second day as
                  optional to explore other dive site/s
                  and for more <strong>fun diving experience.</strong>
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  All lessons come with <strong>free use of
                  rental gears </strong>, and free underwater
                  photos and videos.
                </p>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <p class="card-text steelblue">
                  Gears are properly <strong>cleaned</strong>,
                  disinfected, and stored.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End why us Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonial" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="steelblue">Reviews</h2>
          <p class="text-muted">For more reviews, check our <a href="https://www.facebook.com/seanglebreath" class="steelblue">facebook</a> page</p>
        </div>
        <div class="row text-center">
          <div class="owl-carousel owl-theme">

            <div class="">
              <div class="fb-post" data-href="https://www.facebook.com/jb.binuya1/posts/4440730915953314" data-width="350" data-show-text="true"><blockquote cite="https://www.facebook.com/jb.binuya1/posts/4440730915953314" class="fb-xfbml-parse-ignore"><p>- great coaches. they won&#039;t give up on you even if you already feel like giving up.
                - great accommodation. good food,...</p>Posted by <a href="#" role="button">Jb Binuya</a> on&nbsp;<a href="https://www.facebook.com/jb.binuya1/posts/4440730915953314">Sunday, 7 March 2021</a></blockquote></div>
            </div>

            <div class="">
              <div class="fb-post" data-href="https://www.facebook.com/anne.hermoso1/posts/10223529537959097" data-width="350" data-show-text="true"><blockquote cite="https://www.facebook.com/anne.hermoso1/posts/10223529537959097" class="fb-xfbml-parse-ignore"><p>Coaches are very professional and genuine! I had so much fun!</p>Posted by <a href="#" role="button">Roxanne Rico</a> on&nbsp;<a href="https://www.facebook.com/anne.hermoso1/posts/10223529537959097">Tuesday, 23 February 2021</a></blockquote></div>
            </div>

            <div class="">
              <div class="fb-post" data-href="https://www.facebook.com/paulivanvillacrusis/posts/10225092893940499" data-width="350" data-show-text="true"><blockquote cite="https://www.facebook.com/paulivanvillacrusis/posts/10225092893940499" class="fb-xfbml-parse-ignore"><p>I&#039;ll put it this way.
              1. You&#039;d definitely learn how to freediving.
              2. Accomodation are great!
              3. The Dessert is...</p>Posted by <a href="#" role="button">Paul Ivan Villacrusis</a> on&nbsp;<a href="https://www.facebook.com/paulivanvillacrusis/posts/10225092893940499">Monday, 8 March 2021</a></blockquote></div>
            </div>

          </div>
      </div>
      </div>
    </section> -->
    <!-- End Other testimonial Section -->

    <!-- GALLERY SECTION -->
    <section>
      <div class="container">

        <div class="section-title">
          <h2 class="steelblue">Gallery</h2>
        </div>
        <!-- Gallery -->
        <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img
            src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/183237202_961259598014733_5743636806194415188_n.png?_nc_cat=103&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeH0sdaAvR6eknyjKP22UoQ1v7LjCGQsu9K_suMIZCy70o4vDjMWImyq4qzak_PtAVsgmj1UX7B5AqqsMhr2uqOh&_nc_ohc=Ifg2nrxSgg4AX_W7PO9&_nc_ht=scontent.fmnl3-3.fna&oh=d64646766b3777ce37d587ddf37573f5&oe=60BE4220"
            class="w-100 shadow-1-strong rounded mb-4"
            alt=""
          />

          <img
            src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/183930380_296248515326371_2413174518333580984_n.png?_nc_cat=103&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeFBIO2OcqJ1-vsaYd79d71rHNR5HhdYzGgc1HkeF1jMaJpGs4oDl6zK9p6jkFCYnGyx6R-3H26qQSuMLuu_trZO&_nc_ohc=S_vPZbuhye4AX8meO0D&_nc_ht=scontent.fmnl3-3.fna&oh=2719d89b97089df00c75352c94fd9d45&oe=60BCC054"
            class="w-100 shadow-1-strong rounded mb-4 gallery-mobile"
            alt=""
          />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
            src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t1.15752-9/183839599_804927953482185_680751977817281376_n.png?_nc_cat=107&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeELVROuOP22_TvvIgkVQ4lx63a7SRsU4QjrdrtJGxThCCzV0xJOia0PKnZNk0k71ph2ozQsR03zjbjtG3jsbSgu&_nc_ohc=lnbTkE2fu7sAX97h_ra&_nc_ht=scontent.fmnl3-4.fna&oh=37dc121b77f87ade3fdf7a35894ece26&oe=60BDA3BC"
            class="w-100 shadow-1-strong rounded mb-4 gallery-mobile-2"
            alt=""
          />

          <img
            src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/183957106_880473859176839_7038553216582030268_n.png?_nc_cat=103&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeFa9C8HNJXQsvCWlL2M2lZQ34hZaxcg6X7fiFlrFyDpfgj7Cbx5Iax1eJZXfjZF87NtV5ztMn3FvAEnGXQvi-eN&_nc_ohc=vL9x2NLLRkwAX-ZE9nS&_nc_ht=scontent.fmnl3-3.fna&oh=5300992dfb372201ab2944b145e70e20&oe=60BC67D2"
            class="w-100 shadow-1-strong rounded mb-4"
            alt=""
          />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
            src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/184075901_311391737216997_8507664713179296830_n.png?_nc_cat=103&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeHAG411DqrulTQhKHeseWQV1wYCeOR5aW7XBgJ45HlpbvbghauqtX_uE-Fr4a221ikYF-rEB7vSQhLtEzcM6t5r&_nc_ohc=xlmKOkjHR2oAX9Xeatb&_nc_ht=scontent.fmnl3-3.fna&oh=e22531b482cecbbf8cb2605196f9420c&oe=60BDE4A0"
            class="w-100 shadow-1-strong rounded mb-4"
            alt=""
          />

          <img
            src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t1.15752-9/183623047_287818016329782_598484565162358713_n.png?_nc_cat=107&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeFzhLBGEYtO7rSt-iVbvEy6DgPuTvxK7QYOA-5O_ErtBqDDJJ_WTmPaYx7WmCtAd0j6gi0TDoJxD3eiNVAUjagJ&_nc_ohc=oVJ2-yAWmmoAX8AfrqH&_nc_ht=scontent.fmnl3-4.fna&oh=d36a4bed130fcb660c5d3bdf6b32c7c6&oe=60BF0C8E"
            class="w-100 shadow-1-strong rounded mb-4 gallery-mobile"
            alt=""
          />
        </div>
        </div>
        <!-- Gallery -->
      </div>
    </section><!-- END GALLERY SECTION -->

    <!-- molchanovs -->
    <section>
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-md-6 text-center">
                <a href="<?= $molchanovsFrancis ?>" target="_blank">
                  <img width="350" id="melchanovs" src="https://www.pinclipart.com/picdir/big/336-3367319_asset-4big-molchanovs-logo-clipart.png" alt="Melchanovs Logo">
                </a>
              </div>
              <div class="col-md-6 mt-4">
                <div class="row">
                  <div class="col-lg-12 mb-3">
                    <h4 id="melchanovs-text" class="steelblue">
                      The World's best freediving education system and training made by Freedivers for Freedivers!
                    </h4>
                  </div>

                  <div class="col-lg-12">
                    <h4 id="melchanovs-text" class="steelblue"><strong><a href="https://molchanovs.com/" target="_blank" class="steelblue">
                      Molchanovs</a></strong> Freediving Education can take you from learning the basics of
                      freediving through to an elite competition freediver.</h4>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </section>
    <!-- END melchanovs -->

    <!-- ======= About instructor Section ======= -->
    <section id="testimonial" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="steelblue home-header-text">About the Instructor</h2>
          <!-- <p class="text-muted">For more reviews, check our facebook page</p> -->
        </div>

        <div class="row">
          <div class="col-md-6 p-5 text-center d-flex flex-column justify-center">
            <img style="object-fit:cover;" src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/183509288_500042644752324_9134269035116147572_n.png?_nc_cat=111&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeHfrV8VXliRB4lrscw2DnCFiz00AeKABduLPTQB4oAF27acm1kmAtEPVTNWhlDxfGti3IPT4X9Yq6-ggbd2fnCS&_nc_ohc=oBufGDEWrtcAX9cAlFq&_nc_ht=scontent.fmnl3-3.fna&oh=17d4b03c9ebf8ebdb1b6dea764c0f9c3&oe=60BEEE77" alt="">
          </div>
          <div class="col-md-6 p-5 d-flex flex-column justify-content-between">
            <div class="">
              Courses are conducted by Wave by Wave, <strong><a href="<?= $molchanovsFrancis ?>" class="steelblue" target="_blank">FRANCIS SULANGI</a></strong>, the first fastest
              Filipino who has completed all the
              knowledge and skill requirements in
              three (3) weeks straight for Advance
              Level, Master Level up to Instructor
              Course.
              He has been Certified Molchanovs
              Instructor by World Legends
              96Meter CWT Australian Champion
              <strong>- ADAM STERN</strong>, together the
              World’s deepest freediver with 130Meter CWT World Record Holder - <strong>ALEXEY
              MOLCHANOV.</strong> He was also coached by 102Meters No Fins World Record
              Holder - <strong>WILLIAM TRUBRIDGE</strong> during his Master Freediving Course for No
              Fins Technique.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 ml-4">
            <a href="https://www.facebook.com/groups/1739752889505785?_rdc=1&_rdr" target="_blank">
              <h5 class="steelblue">Wave By Wave Freediving Club</h5>
            </a>
            <div class="">
              <p>It is a mentorship training and ladderized certification program.</p>
              <p>
                An exclusive access to mentorship and group trainings from dry, pool, to depth,
                dedicated only to the members of the club to further improve their freediving
                skills and to continue the training with the supervision of the said instructor at no
                cost.
              </p>
              <p>
                The ladderized course program is also catered towards helping the students to
                pass the skill requirements within one (1) year validity of the course, hence the
                students may participate with the scheduled training sessions at no cost
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- END ABOUT THE INSTRUCTOR -->

    <section>
      <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 d-flex flex-column justify-content-between">
              <h3 style="color:#236B8E" class="mb-4 home-header-text">(LAP 1 & WAVE 1)</h3>
              <div class="">
                In this course <strong>(LAP 1 & WAVE 1)</strong>,
                learn the basics of freediving by
                uncovering your natural freediving
                ability. Here, you will be taught to
                dive down 12-20 meters and learn
                techniques to hold your breath
                beyond a minute and a half. Topics
                include the physics of freediving,
                introduction to equalization and
                breathing, dive visualization and
                much more.
              </div>
              <div class="mt-3">
                <h6>RATES:</h6>
                <ul>
                  <li>P16,000, 5-day course with FREE membership to Wave by Wave Freediving Club</li>
                  <li>P14,000 3-day course with FREE membership to Wave by Wave Freediving Club</li>
                  <li>P12,000 2-day course.</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 p-5 text-center d-flex flex-column justify-center">
              <img style="object-fit: cover;" src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t1.15752-9/184155001_1110861569425647_2958255264681900599_n.png?_nc_cat=110&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeGhainTAaLRrFwik_QS3c38Axf4PBQ3k-ADF_g8FDeT4FGYTrzWrgxke4gNVgYy1Jnxx-cVXPVIN7ab2GTGDw_j&_nc_ohc=ghofPzWnucEAX-N4813&_nc_ht=scontent.fmnl3-1.fna&oh=01305e6e15d83812e1c4501c71d84ecd&oe=60BB3A95" alt="">
              <small class="">Adam Stern, Australian Champion</small>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 p-5 d-flex flex-column justify-content-between">
              <h3 style="color:#236B8E" class="mb-4 home-header-text">(LAP 2 & WAVE 2)</h3>
              <div class="">
                In this course <strong>(LAP 2 & WAVE 2)</strong>,
                students learn how to train the body
                for freediving and all the skills and
                knowledge needed to dive
                comfortably up to 24-30 meters. As
                well as hold your breath beyond two
                and a half minutes. Topics include
                relaxation modifications,
                improvement of Frenzel equalization,
                introduction to the dolphin kick and
                much more.
              </div>
              <div class="mt-3">
                <h6>RATES:</h6>
                <ul>
                  <li>P18,000, 6-day course with FREE membership to Wave by Wave Freediving Club</li>
                  <li>P16,000 4-day course with FREE membership to Wave by Wave Freediving Club</li>
                  <li>P14,000 3-day course.</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 p-5 text-center d-flex flex-column justify-center">
              <img style="object-fit:cover;" src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/183991422_317579139797099_559667930951486706_n.png?_nc_cat=111&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeGx8z1K3SBqgLBi9RgX5duxcOKDCb0ImUZw4oMJvQiZRhUcs6kfqAUVcbvdb6lc7lB1H_suJn-9k8F8WaGck46Y&_nc_ohc=Zz1jPRd0-QAAX-Yf6TW&tn=iaDw6QSbOPByWW8m&_nc_ht=scontent.fmnl3-3.fna&oh=122a5fa1d7409c77cadf1170c7b6b050&oe=60BB9706" alt="">
              <small class="">Alexey Molchanov, World Record Holder</small>
            </div>
        </div>

      </div>
    </section>



  </main><!-- End #main -->
