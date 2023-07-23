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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        .chart-container {
            width: 100%;
            height: 400px;
            display: flex;
        }

        .chart {
            flex: 2;
            height: 80%;
        }
    </style>
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('landingPage') }}">
                        <img src="images/icon_logo.png" width="250px" alt=""
                            style="background-color: white; border-radius: 2px; margin-left: 50px;">
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                            Pendidikan Pesantren Thawalib Tanjung limau menekankan pada pembentukan
                                            pribadi muslim, mukmin dan muhsin yang Berbudi Tinggi, Berbadan Sehat,
                                            Berpengetahuan Luas, Berpikiran Bebas dan Beramal Ikhlas.
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('login') }}" class="btn-1">
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
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
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
                            Pondok Pesantren Thawalib Tanjung Limau adalah salah satu lembaga Pendidikan Agama tertua di
                            Minangkabau Khususnya Kabupaten Tanah Datar . secara geografis Tanjung Limau termasuk
                            kenagarian Simabur Kecamatan Pariangan Kabupaten Tanah Datar terdiri dari dataran seluas 139
                            ha yang terletak 11,5 Km dari ibu kota Kabupaten dan 1,5 Km dari ibu kota Kecamatan. Sebelah
                            utara berbatasan dengan Jorong Simabur dan Jorong Koto Tuo, sebelah selatan berbatasan
                            dengan Jorong Batu Basa, sebelah timur dengan Kenagarian Tabek dan sebelah barat dengan Koto
                            Baru.
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
                    Merupakan sebuah rangkaian kegiatan sistematik yang dirancang untuk mengatur penyelenggaraan PSB
                    mulai dari persiapan (pra pendaftaran), pengumuman pendaftaran, pendaftaran dan penyerahan dokumen
                    persyaratan, seleksi hingga batas kuota daya tampung, pengumuman hasil seleksi secara terbuka,
                    hingga daftar ulang.

                </p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="detail_container ">
                        <div class="box rounded">
                            <div class="top-box">
                                <div class="icon-box">
                                    <img src="images/work-i1.png" alt="">
                                </div>
                                <h4 class="font-weight-bold">
                                    Gelombang 1
                                </h4>
                            </div>
                            <div class="bottom-box ">
                                @if ($gelombang1)
                                    <p class="font-weight-bold">
                                        Penerimaan Peserta Didik Baru (PPDB) Tahun {{ now()->format('Y') }}.</p>
                                    <p class="font-weight-bold">Pendaftaran Gelombang Pertama </p>
                                    <p> &emsp; -{{ $gelombang1['batas_waktu_pendaftaran'] }}
                                        -
                                        {{ $gelombang1['pengumuman_hasil'] }}</p>
                                    <p class="font-weight-bold">Ujian Tulisan </p>
                                    <p> &emsp; - {{ $gelombang1['ujian_tulisan'] }}</p>
                                    <p class="font-weight-bold">Ujian Lisan </p>
                                    <p> &emsp; - {{ $gelombang1['ujian_lisan'] }}</p>
                                    <p class="font-weight-bold">Pengumuman Hasil </p>
                                    <p> &emsp; - {{ $gelombang1['pengumuman_hasil'] }}</p>
                                    <center>
                                        <div class="btn-box d-block">
                                            <a href="#">
                                                <center class="font-weight-bold">Pendaftaran Ulang</center>
                                                {{ $gelombang1['daftar_ulang'] . ' - ' . $gelombang1['batas_daftar_ulang'] }}
                                            </a>
                                        </div>
                                    </center>
                                @else
                                    <p class="font-weight-bold mt-3 text-center">Pendaftaran Gelombang 1 Belum Dibuka
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="detail_container  h-100 ">
                        <div class="box rounded">
                            <div class="top-box">
                                <div class="icon-box">
                                    <img src="images/work-i1.png" alt="">
                                </div>
                                <h4 class="font-weight-bold">
                                    Gelombang 2
                                </h4>
                            </div>
                            <div class="bottom-box">
                                @if ($gelombang2)
                                    <p class="font-weight-bold">
                                        Penerimaan Peserta Didik Baru (PPDB) Tahun {{ now()->format('Y') }}.</p>
                                    <p class="font-weight-bold">Pendaftaran Gelombang Pertama </p>
                                    <p> &emsp; -{{ $gelombang2['batas_waktu_pendaftaran'] }}
                                        -
                                        {{ $gelombang2['pengumuman_hasil'] }}</p>
                                    <p class="font-weight-bold">Ujian Tulisan </p>
                                    <p> &emsp; - {{ $gelombang2['ujian_tulisan'] }}</p>
                                    <p class="font-weight-bold">Ujian Lisan </p>
                                    <p> &emsp; - {{ $gelombang2['ujian_lisan'] }}</p>
                                    <p class="font-weight-bold">Pengumuman Hasil </p>
                                    <p> &emsp; - {{ $gelombang2['pengumuman_hasil'] }}</p>
                                    <center>
                                        <div class="btn-box d-block">
                                            <a href="#">
                                                <center class="font-weight-bold">Pendaftaran Ulang</center>
                                                {{ $gelombang2['daftar_ulang'] . ' - ' . $gelombang2['batas_daftar_ulang'] }}
                                            </a>
                                        </div>
                                    </center>
                                @else
                                    <p class="font-weight-bold mt-3 text-center">Pendaftaran Gelombang 2 Belum Dibuka
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end work section -->

    <!-- grafik section -->
    <section class="work_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Program Unggulan
                </h2>
                <p>
                    Mau tau apa saja program unggulan yang ada pada Pondok Pesantren Thawalib Tanjung limau?
                </p>
            </div>

            <div class="chart-container ">
                <div id="grafik1" class="chart" class="bg-light">
                </div>
                <div id="grafik2" class="chart" class="bg-light">
                </div>
                <div id="grafik3" class="chart" class="bg-light">
                </div>

            </div>
        </div>
    </section>
    <!-- end grafik section -->

    <!-- team section -->
    <section class="team_section layout_padding2-bottom mt-3" id="berita">
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.683932818669!2d100.51194157389594!3d-0.47026403527642613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5251073c3835d%3A0x297ab28afbfb6354!2sPondok%20Pesantren%20Thawalib%20Tanjung%20Limau!5e0!3m2!1sen!2sid!4v1685892197374!5m2!1sen!2sid"
                width="700px" height="300px" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- end client section -->

    <div class="footer_bg">
        <!-- contact section -->
        <section class="contact_section layout_padding" id="contact">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Pesantren Thawalib Tanjung Limau
                    </h2>
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
                                    <a class="" href="index.html">Home <span
                                            class="sr-only">(current)</span></a>
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
                valueField: "total",
                categoryField: "jalur_masuk"
            }));
            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series.data.setAll({!! $test !!});


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
                valueField: "total",
                categoryField: "asal_sekolah"
            }));


            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series.data.setAll({!! $asalsekolah !!});



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
                valueField: "total",
                categoryField: "jenkel"
            }));


            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series.data.setAll({!! $gender !!});



            // Play initial series animation
            // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
            series.appear(1000, 100);

        }); // end am5.ready()
    </script>
</body>

</html>
