<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMK Negeri 1 Grujugan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center" style="margin-top: 20px;">
                <div class="logo">
                    <h1 class="text-light"><a href="index.html"><span>SKAGU</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
                </div>

                <nav class="nav-menu d-none d-lg-block" style="height: 90px; border-right-width: 65px;
                padding-right: 5; padding-right: 5px;">
          <ul>
            <li> <a href="/">Home</a></li>
            <li class= "drop-down"><a href="#">Profil</a>
                <ul>
                    <li>
                        <a class="nav-link" href="{{ url('/visiMisiTujuan') }}">Visi, Misi dan Tujuan</a></li>
                    <li><a href="/identitasSekolah">Identitas Sekolah</a></li>
                    <li><a href="/strukturOrg">Struktur Organisasi</a></li>
                    <li><a href="/jmlhSiswa">Jumlah Peserta Didik</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Paket Keahlian</a>
                <ul>
                    <li><a href="/agbsnsTani">Agribisnis Pengolahan Hasil Pertanian</a></li>
                    <li><a href="/agsbnsIkan">Agribisnis Pengolahan Hasil Perikanan</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">BKK</a>
                <ul>
                    <li><a href="/tntgBKK">Tentang (BKK)</a></li>
                    <li><a href="/orgnssBKK">Organisasi (BKK)</a></li>
                    <li><a href="/inputDataAlumni">Input Data Alumni</a></li>
                </ul>
            </li>
            
            <li class= "drop-down"><a href="#">Kurikulum</a>
                <ul>
                    <li><a href="/tntgKrklm">Tentang Kurikulum</a></li>
                    <li><a href="/organisasi">Organisasi Kurikulum</a></li>
                    <li><a href="/klndrPmbljaran">Kalender Pembelajaran</a></li>
                    <li><a href="/pmbljaran">Pembelajaran</a></li>
                    <li><a href="/penilaian">Penilaian</a></li>
                    <li><a href="/srtfkasi">Sertifikasi</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Humas</a>
                <ul>
                    <li><a href="/tntgHum">Tentang (Humas)</a></li>
                    <li><a href="/orgnssHum">Organisasi (Humas)</a></li>
                    <li><a href="/prgrmkrjHum">Program Kerja (Humas)</a></li>
                    <li><a href="/pkl">PKL</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Kesiswaan</a>
                <ul>
                    <li><a href="/tntgSis">Tentang (Kesiswaan)</a></li>
                    <li><a href="/orgnssSis">Organisasi (Kesiswaan)</a></li>
                    <li><a href="/prgrmkrjSis">Program Kerja (Kesiswaan)</a></li>
                    <li><a href="/ekskul">Ekstrakurikuler</a></li>
                    <li><a href="/kegOsis">Kegiatan OSIS</a></li>
                    <li><a href="/kegPram">Kegiatan Pramuka</a></li>
                    <li><a href="/dokKeg">Dokumen Kegiatan</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Sarana Prasarana</a>
                <ul>
                    <li><a href="/tntgSarpras">Tentang (SarPras)</a></li>
                    <li><a href="/orgnssSarpras">Organisasi (SarPras)</a></li>
                    <li><a href="/prgrmkrjSarpras">Program Kerja (SarPras)</a></li>
                    <li><a href="/fasSek">Fasilitas Sekolah</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Perpustakaan</a>
                <ul>
                    <li><a href="/tntgPerpus">Tentang (Perpustakaan)</a></li>
                    <li><a href="/orgnssPerpus">Organisasi (Perpustakaan)</a></li>
                </ul>
            </li>
            <li class= "drop-down"><a href="#">Informasi</a>
                <ul>
                    <li><a href="/berita">Berita</a></li>
                    <li><a href="/inform">Informasi</a></li>
                </ul>
            </li>
            
            <li><a href="/ppdb">PPDB</a>
            
            <li><a href="/kontak">Kontak</a></li>

            <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
          </ul>
                </nav><!-- .nav-menu -->
                
            </div><!-- End Header Container -->
            <hr style="margin-top: 0px; margin-bottom: 0px;">
        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SMK NEGERI 1 GRUJUGAN</h3>
                        <p>
                        Congkrong Barat, Taman, Grujugan <br>
                        Kabupaten Bondowoso<br>
                        Jawa Timur 68261, Indonesia <br><br>
                            <strong>Phone:</strong> (0332) 431110<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Keahlian</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>SMK NEGERI 1 GRUJUGAN</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>