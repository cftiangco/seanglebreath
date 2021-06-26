<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SEAngle Breath</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets')?>/img/logo-dark.png" rel="icon">
  <link href="<?=base_url('assets')?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet">
  <style>
    .other-services-img {
      max-width: 100%;
      height: auto;
    }
    .card-body {
      box-shadow: 0 0 20px 7px rgba(0,0,0,0.1);
    }
    <?php if(isset($index)):?>
    /* .card {
      margin: 1rem auto;
        position: relative;
      }
    .card-body {
      z-index: 2;
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      } */
    <?php endif; ?>
    @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
      .service-title {
        font-size:5px!important;
      }
      .img-instructor-3 {
        width: 19vh!important;
        height: 10vh!important;
      }
      .img-instructor-4 {
        width: 12vh!important;
        height: 6vh!important;
      }
    }
    @media only screen and (max-width: 600px) {
      .service-title {
        font-size:10px!important;
      }
      .img-instructor-3 {
        width: 19vh!important;
        height: 10vh!important;
      }
      .img-instructor-4 {
        width: 12vh!important;
        height: 6vh!important;
      }

      .about-img {
        width: 24vh!important;
        height: 14vh!important;
      }

      .about-main-img {
        width: 40vh!important;
        height: 50vh
      }

      .freedive-img {
        width: 40vh!important;
        height: 25vh!important;
      }

      #melchanovs {
        width:30vh!important;
      }

      #melchanovs-text {
        padding:5px;
        font-size:20px;
      }

      .gallery-mobile {
        height:24vh;
        object-fit: cover;
        object-position: 100% 22%;
      }

      .gallery-mobile-2 {
        height:24vh;
        object-fit: cover;
        object-position: 100% 55%;
      }

      .melchanovs-center {
        text-align:center;
      }

      .home-header-text {
        font-size:20px!important;
      }
    }
    .how-section1{
      margin-top:-15%;
      padding: 10%;
    }
    .how-section1 h4{
        color: #ffa500;
        font-weight: bold;
        font-size: 30px;
    }
    .how-section1 .subheading{
        color: #3931af;
        font-size: 20px;
    }
    .how-section1 .row
    {
        margin-top: 10%;
    }
    .how-img
    {
        text-align: center;
    }
    .how-img img{
        width: 100%;
    }

    .product-header {
      color:#1E90FF;
    }

    .common-blue-color {
      color:#4682B4
    }

    .bgcolor.scrolled {
      background-color: #00264e!important;
    }

    .steelblue {
      color:#236B8E!important;
    }

    .card-img-top {
      width: 100%;
      height: 40vh;
      object-fit: cover;
    }

    .card:hover{
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      transition: 0.3s;
    }
    /* about banner */
    #about-banner {
      background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.15752-9/186845997_484048226178717_1172071901442139720_n.jpg?_nc_cat=108&_nc_map=test-rt&ccb=1-3&_nc_sid=ae9488&_nc_eui2=AeEX_PyQvApHkZiBq6GY1L4K55QyrS_hEa_nlDKtL-ERr4_9hrgefWq4lpeA9EZBLm5Jt5KnELjDiQVM87aWDEPp&_nc_ohc=VZPMqM1byq4AX9EFSTz&_nc_ht=scontent.fmnl4-6.fna&oh=68f09e3d6fdba2a9e47b9c79bf1b8529&oe=60C4BA00');
      background-size: cover;
      background-repeat: no-repeat;
      height:70vh;
      width:100%;
      background-position: center center;
    }
    /* about banner */

    /* hq detail images */
    .small-img-row {
      display:flex;
      justify-content: space-between;
    }

    .small-img-col {
      flex-basis: 24%;
      cursor: pointer;
    }
    /* hq detail images */

    #hq1-banner {
      background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/174642659_156847036351021_8877588884088724828_n.jpg?_nc_cat=105&_nc_map=test-rt&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeHF4LxXyYVqoFHohuACI8fGiDxjEwdkaCGIPGMTB2RoIa-4DFI3ztirOmovjrs6EHFFBxvdmvfU0Os6S_POWHEm&_nc_ohc=ya2iW5F6N3AAX_tPi73&_nc_ht=scontent.fmnl6-1.fna&oh=3951911093f1dcd5a9a780ce16020e42&oe=60C6B0E4');
      background-size: cover;
      background-repeat: no-repeat;
      height:50vh;
      width:100%;
      background-position: center center;
    }

    #hq2-banner {
      background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/174857772_156844989684559_7463208724288555466_n.jpg?_nc_cat=101&_nc_map=test-rt&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeE00kasnH9ga3tRy3mPWtKuGDcJiTOw3xQYNwmJM7DfFMnwEq_qFSLJmjyt7W2oUK9ZZAbod_C7-cRETzL_1A-q&_nc_ohc=gICSnmkyq7sAX_sI_rK&_nc_ht=scontent.fmnl6-1.fna&oh=4aa729301a2f0b246fc756d46722ca87&oe=60C56720');
      background-size: cover;
      background-repeat: no-repeat;
      height:50vh;
      width:100%;
      background-position: center center;
    }

    #hq3-banner {
      background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/175114552_156843289684729_7607786675459803066_n.jpg?_nc_cat=107&_nc_map=test-rt&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeGecDafPoHG41C9S9XYoBWak4MUFfnN0SqTgxQV-c3RKmrcnyQEJpLGUMWN0Z0n8SdrdHyGkdCvQePIEhh-RcXp&_nc_ohc=wxQtms0XfNMAX-rzc1m&_nc_ht=scontent.fmnl6-1.fna&oh=b762c7d6f429bb0de2324d8a720f1199&oe=60C6B322');
      background-size: cover;
      background-repeat: no-repeat;
      height:50vh;
      width:100%;
      background-position: center center;
    }

    #caheet-monte-banner {
      background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.6435-9/181075368_126647079525615_1987672013041634497_n.jpg?_nc_cat=103&_nc_map=test-rt&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeE_coWPqbySDGECSL-EaTsUvL367Z-63-u8vfrtn7rf6-ZBftnjSjV_Fm9NvkDso8QZY01-SEGtnlxhoIXLmeyk&_nc_ohc=M7JIW0nPDjUAX88gj1X&_nc_ht=scontent.fmnl3-3.fna&oh=ae0f8446dd0da04ded11f66b6fbc574e&oe=60C8F8D9');
      background-size: cover;
      background-repeat: no-repeat;
      height:50vh;
      width:100%;
      background-position: center center;
    }
  </style>
</head>

<body>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="rCwML6RW"></script>
  <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="QGpniaAM"></script> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bgcolor" style="background-color:<?= isset($index) ? 'transparent' : '#00264e' ?>;border-botton:1px solid #aaa">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto"><img src="<?= base_url('assets') ?>/img/logo-white.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?= isset($index) ? 'active':'' ?>"><a href="/">Home</a></li>
          <li class="drop-down <?= isset($services) ? 'active':'' ?>"><a href="#">Services</a>
            <ul>
              <?php foreach($categories as $row): ?>
                <li><a href="/category/<?= $row->id ?>"><?= $row->category_name ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li class="<?= isset($aboutPage) ? 'active':'' ?>"><a href="/about">About Us</a></li>
          <li class="<?= isset($whyUsPage) ? 'active':''?>"><a href="/whyus">Why Us</a></li>
          <li class="drop-down <?= isset($hq) ? 'active':'' ?>"><a href="#">Accomodations</a>
            <ul>
              <li><a href="/sb-hq1">SB-HQ1</a></li>
              <li><a href="/sb-hq2">SB-HQ2</a></li>
              <li><a href="/sb-hq3">SB-HQ3</a></li>
              <li><a href="/caheet-monte">Caheet Monte</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="/#services" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->
