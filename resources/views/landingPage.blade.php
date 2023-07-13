<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PPDB</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/icon_logo.png" width="250px" alt="" style="background-color: white; border-radius: 2px; margin-left: 50px;">
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tentang"> Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pendaftaran"> Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#berita">Berita/Artikel </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Hubungi Kami</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section " id="home">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      Selamat Datang<br>
                      Calon Santri Baru
                    </h1>
                    <p>
                      Pendidikan Pesantren Thawalib Tanjung limau menekankan pada pembentukan pribadi muslim, mukmin dan muhsin yang Berbudi Tinggi, Berbadan Sehat, Berpengetahuan Luas, Berpikiran Bebas dan Beramal Ikhlas.
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('login')}}" class="btn-1">
                        Daftar
                      </a>

                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="margin-left:100px">
                  <div class="img-box">
                    <img src="images/santriwati.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel_btn-container">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section " style="margin:100px;" id="tentang">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/intro.png" alt="">
          </div>
        </div>
        <div class="col-md-6" style="margin-left:50px">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Ponpes Thawalib Tanjung limau?
              </h2>
            </div>
            <p>
              Pondok Pesantren Thawalib Tanjung Limau adalah salah satu lembaga Pendidikan Agama tertua di Minangkabau Khususnya Kabupaten Tanah Datar . secara geografis Tanjung Limau termasuk kenagarian Simabur Kecamatan Pariangan Kabupaten Tanah Datar terdiri dari dataran seluas 139 ha yang terletak 11,5 Km dari ibu kota Kabupaten dan 1,5 Km dari ibu kota Kecamatan. Sebelah utara berbatasan dengan Jorong Simabur dan Jorong Koto Tuo, sebelah selatan berbatasan dengan Jorong Batu Basa, sebelah timur dengan Kenagarian Tabek dan sebelah barat dengan Koto Baru.
            </p>
            <a href="">
              lanjut
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Program Unggulan
        </h2>
        <p>
          Mau tau apa saja program unggulan yang ada pada Pondok Pesantren Thawalib Tanjung limau?
        </p>
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
            <img src="images/ngaji.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Tahfidz Al-Qur'an
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/football.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Eskul Olahraga

            </h5>

          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/karate.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Pencak Silat
            </h5>

          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/drum.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Marching Band
            </h5>

          </div>
        </div>
  </section>
  <!-- end service section -->

  <!-- work section -->

  <section class="work_section layout_padding">
    <div class="container" id="pendaftaran">
      <div class="heading_container">
        <h2>
          Informasi seputar penerima santri baru!
        </h2>
        <p>
          Merupakan sebuah rangkaian kegiatan sistematik yang dirancang untuk mengatur penyelenggaraan PSB mulai dari persiapan (pra pendaftaran), pengumuman pendaftaran, pendaftaran dan penyerahan dokumen persyaratan, seleksi hingga batas kuota daya tampung, pengumuman hasil seleksi secara terbuka, hingga daftar ulang.

        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="images/work-i1.png" alt="">
                </div>
                <h5>
                  Gelombang 1
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  Penerimaan Peserta Didik Baru (PPDB) tahun pelajaran 2023/2024. Pendaftaran Gelombang Pertama dibuka dari {{$lastRecord->batas_waktu_pendaftaran}} hingga {{$lastRecord->pengumuman_hasil}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-box">
        <a href="" class="btn-2">
          Pendaftaran Ulang 25 Mei s/d 30 Mei 2023
        </a>

      </div>
    </div>
  </section>
  <!-- end work section -->
  <div class="container">
    <div class="heading_container">
      <h2>
        Informasi seputar visualisasi data santri baru!
      </h2>
    </div>
  </div>
  <br>
  <br>
  <br>
  <style>
    .chart-container {
      width: 100%;
      height: 300px;
      display: flex;
    }

    .chart {
      flex: 1;
      height: 100%;
    }
  </style>

  <div class="chart-container">
    <div id="grafik1" class="chart">
      <h5>Sebaran Pendaftar</h5>
    </div>
    <div id="grafik2" class="chart">
      <h5>Asal Sekolah</h5>
    </div>
    <div id="grafik3" class="chart">
      <h5>Gender</h5>
    </div>
  </div>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script>
    am5.ready(function() {

      // Create root element
      // https://www.amcharts.com/docs/v5/getting-started/#Root_element
      var root = am5.Root.new("grafik1");


      // Set themes
      // https://www.amcharts.com/docs/v5/concepts/themes/
      root.setThemes([
        am5themes_Animated.new(root)
      ]);


      // Create chart
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
      var chart = root.container.children.push(am5percent.PieChart.new(root, {
        layout: root.verticalLayout
      }));


      // Create series
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
      var series = chart.series.push(am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category"
      }));


      // Set data
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
      series.data.setAll([{
          value: 10,
          category: "One"
        },
        {
          value: 9,
          category: "Two"
        },
        {
          value: 6,
          category: "Three"
        },
        {
          value: 5,
          category: "Four"
        },
        {
          value: 4,
          category: "Five"
        },
        {
          value: 3,
          category: "Six"
        },
        {
          value: 1,
          category: "Seven"
        },
      ]);


      // Play initial series animation
      // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
      series.appear(1000, 100);

    }); // end am5.ready()
    am5.ready(function() {

      // Create root element
      // https://www.amcharts.com/docs/v5/getting-started/#Root_element
      var root = am5.Root.new("grafik2");


      // Set themes
      // https://www.amcharts.com/docs/v5/concepts/themes/
      root.setThemes([
        am5themes_Animated.new(root)
      ]);


      // Create chart
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
      var chart = root.container.children.push(am5percent.PieChart.new(root, {
        layout: root.verticalLayout
      }));


      // Create series
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
      var series = chart.series.push(am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category"
      }));


      // Set data
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
      series.data.setAll([{
          value: 10,
          category: "SMK 1"
        },
        {
          value: 9,
          category: "SMK 2"
        },
        {
          value: 6,
          category: "SMK 3"
        },
        {
          value: 5,
          category: "SMK 4"
        },
        {
          value: 4,
          category: "SMA 1"
        },
        {
          value: 3,
          category: "SMA 2"
        },
        {
          value: 15,
          category: "SMA 4"
        },
      ]);


      // Play initial series animation
      // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
      series.appear(1000, 100);

    }); // end am5.ready()
    am5.ready(function() {

      // Create root element
      // https://www.amcharts.com/docs/v5/getting-started/#Root_element
      var root = am5.Root.new("grafik3");


      // Set themes
      // https://www.amcharts.com/docs/v5/concepts/themes/
      root.setThemes([
        am5themes_Animated.new(root)
      ]);


      // Create chart
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
      var chart = root.container.children.push(am5percent.PieChart.new(root, {
        layout: root.verticalLayout
      }));


      // Create series
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
      var series = chart.series.push(am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category"
      }));


      // Set data
      // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
      series.data.setAll([{
          value: 80,
          category: "Wanita"
        },
        {
          value: 20,
          category: "Pria"
        },
      ]);


      // Play initial series animation
      // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
      series.appear(1000, 100);

    }); // end am5.ready()
  </script>


  <br>
  <br>
  <br>
  <!-- team section -->

  <section class="team_section layout_padding2-bottom" id="berita">
    <div class="container">
      <div class="heading_container">
        <h2>
          Berita/Artikel
        </h2>
      </div>
    </div>
    <div class="team_container">
      <div class="box b-1">
        <div class="img-box">
          <img src="images/vaksin.jpg" alt="" class="berita_img">
        </div>
        <div class="detail-box">
          <h5>
            Vaksinasi
          </h5>
          <p>
            Vaksinasi Merdeka di Pontren Thawalib Tanjung Limau, 514 Orang Divaksin Covid-19
          </p>
        </div>
      </div>

      <div class="box b-2">
        <div class="img-box">
          <img src="images/upacara.jpg" alt="" class="berita_img">
        </div>
        <div class="detail-box">
          <h5>
            Upacara
          </h5>
          <p>
            Ponpes Thawalib Tanjung Limau Gelar Upacara Peringatan HSN Ke -4 Tahun 2021
          </p>
        </div>
      </div>
      <div class="box b-3">
        <div class="img-box">
          <img src="images/usia.jpg" alt="" class="berita_img">
        </div>
        <div class="detail-box">
          <h5>
            Kunjungan
          </h5>
          <p>
            Hampir Berusia Satu Abad, Ponpes Thawalib Tanjung Limau Kec. Pariangan Dikunjungi Kakanwil
          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- client section -->

  <div class="container">

    <div class="map-responsive" style="width: 100%; height: 400px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.683932818669!2d100.51194157389594!3d-0.47026403527642613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5251073c3835d%3A0x297ab28afbfb6354!2sPondok%20Pesantren%20Thawalib%20Tanjung%20Limau!5e0!3m2!1sen!2sid!4v1685892197374!5m2!1sen!2sid" width="700px" height="300px" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
    </div>
  </div>



  <!-- end client section -->

  <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contact">
      <div class="container">
        <div class="heading_container">
          <h2>
            Get In touch
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->
    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h4>
                Program Unggulan
              </h4>
              <ul>
                <li>Tahfidz Al-Quran</li>
                <li>Pramuka</li>
                <li>Pencak Silat</li>
                <li>Marching Band</li>
                <li>Eksul Olahraga</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                <li class=" active">
                  <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="#tentang"> About</a>
                </li>
                <li class="">
                  <a class="" href="#pendaftaran"> Pendaftaran </a>
                </li>
                <li class="">
                  <a class="" href="#contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  081291226567
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  thawalibtanjunglimau@gmail.com
                </p>
              </a>
            </div>
            <div class="info_form ">
              <div class="social_box">
                <a href="https://www.facebook.com/pondokpesantrenthawalibtanjunglimau">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="https://www.instagram.com/twlb_tanjunglimau/">
                  <img src="images/instagram.png" alt="">
                </a>
                <a href="https://youtube.com/@blkkomunitasthawalibtanjun6805">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end info_section -->
    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://ppthawalibtanjunglimau.ponpes.id/">Thawalib Tanjung Limau</a>
        </p>
      </div>
    </section>
    <!-- footer section -->
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
  <label class='chatButton' for='offchatMenu'>
    <svg class='svg-1' viewBox='0 0 32 32'>
      <g>
        <path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path>
        <path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path>
      </g>
    </svg>
    <svg class='svg-2' viewBox='0 0 512 512'>
      <path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path>
    </svg>
  </label>

  <div class='chatBox'>
    <div class='chatContent'>
      <div class='chatHeader'>
        <svg viewbox='0 0 32 34'>
          <path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path>
          <rect height='2' width='2' x='19' y='9'></rect>
          <rect height='2' width='2' x='14' y='9'></rect>
          <rect height='2' width='2' x='24' y='9'></rect>
          <path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path>
        </svg>
        <div class='chatTitle'>Silahkan chat dengan tim kami <span>Admin akan membalas dalam beberapa menit</span></div>
      </div>
      <div class='chatText'>
        <span>Halo, Ada yang bisa kami bantu?</span>
        <span class='typing'>...</span>
      </div>
    </div>

    <a class='chatStart' href='https://api.whatsapp.com/send?phone=6281291226567&text=Assalamualaikum,%20Saya%20ingin%20bertanya' rel='nofollow noreferrer' target='_blank'>
      <span>Mulai chat...</span>
    </a>
  </div>

</body>

</html>