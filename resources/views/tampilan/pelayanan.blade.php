<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Logis Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-user/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-user/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>MPP</h1>
            </a>

            @if(Auth::check() && auth()->user()->is_admin == 0)
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/pelayanan" class="active">Pelayanan</a></li>
                    <li><a class="get-a-quote" href="/sesi/logout">Keluar</a></li>
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/user/profil">Profil</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .navbar -->

            @else
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/pelayanan" class="active">Pelayanan</a></li>
                    <li><a class="get-a-quote" href="/login">Masuk</a></li>
                </ul>
            </nav><!-- .navbar -->
            @endif

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="backgroundfaq">
                <div class="page-header d-flex align-items-center">
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h2>Layanan Mal Pelayanan Publik</h2>
                                <p>Pelayanan publik dikatakan baik jika memenuhi beberapa asas-asas kepentingan umum, kepastian hukum, kesamaan hak, keseimbangan hak dan kewajiban, profesional, partisipatif, persamaan perlakuan/tindak diskriminatif, keterbukaan, akuntabilitas, fasilitas dan perlakukan khusus bagi kelompok rentan, ketepatan waktu, serta kecepatan kemudahan dan keterjangkauan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="container">
                        <ol>
                            <li><a href="/">Beranda</a></li>
                            <li>Pelayanan</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Jenis pelayanan yang dapat diakses masyarakat</span>
                    <h2>Jenis pelayanan yang dapat diakses masyarakat</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dinas Dukcapil
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Dokumen kependudukan</li>
                                        <li>Pencatatan Sipil</li>
                                        <li>Konsolidasi data</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bappenda
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Local tax</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bank Jateng
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Payment Point</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Kesbangpol + Bappeda
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        <li>Rekomendasi izin penilitian</li>
                                        <li>Izin penelitian</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BPJS Kesehatan
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran</li>
                                        <li>Perubahan data</li>
                                        <li>Informasi</li>
                                        <li>Penanganan Pengaduan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BPJS Ketenagakerjaan
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran (perusahaan, informasi, jasa konstruksi)</li>
                                        <li>Pembinaan</li>
                                        <li>Informasi</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        DPU PR
                                    </button>
                                </h3>
                                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Informasi tata ruang</li>
                                        <li>Rekomendasi IMB</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dinas Perkim LH
                                    </button>
                                </h3>
                                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Rekomendasi izin lingkungan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        PDAM
                                    </button>
                                </h3>
                                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran</li>
                                        <li>Pembayaran tagihan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        PLN
                                    </button>
                                </h3>
                                <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran</li>
                                        <li>Pembayaran Tagihan</li>
                                        <li>Penambahan daya</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dishub
                                    </button>
                                </h3>
                                <div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>SK izin trayek, kartu pengawasan, kartu jam pemberangkatan</li>
                                        <li>Andalalin</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-12">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BPKAD
                                    </button>
                                </h3>
                                <div id="faq-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Klim</li>
                                        <li>Non Klim</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-13">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dinas Kesehatan
                                    </button>
                                </h3>
                                <div id="faq-content-13" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Surat izin praktek</li>
                                        <li>Rekomendasi izin kesehatan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-14">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        KPP Pratama
                                    </button>
                                </h3>
                                <div id="faq-content-14" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Permohonan NPWP</li>
                                        <li>Id Billing</li>
                                        <li>Pengaduan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-15">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dislutkan
                                    </button>
                                </h3>
                                <div id="faq-content-15" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran (STDK, Pendaftaran Perikanan)</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-16">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Kemenag
                                    </button>
                                </h3>
                                <div id="faq-content-16" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pernikahan</li>
                                        <li>Pendaftaran Haji</li>
                                        <li>Rekomendasi Paspor</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-17">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Samsat
                                    </button>
                                </h3>
                                <div id="faq-content-17" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Penelitiain ulang STNK 1 tahun</li>
                                        <li>Pergantian STNK 5 tahun</li>
                                        <li>Penerbitan STNK Kendaraan baru</li>
                                        <li>Mutasi keluar</li>
                                        <li>Penerbitan STNK Kendaraan mutasi masuk</li>
                                        <li>Penerbitan STNK Kendaraan ganti pemilik</li>
                                        <li>Pelayanan pajak air permukaan</li>
                                        <li>Perpanjangan SIM A dan C</li>
                                        <li>SKCK</li>
                                        <li>Layanan aduan, surat kehilangan</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-18">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        DPMPTSP Provinsi Jateng
                                    </button>
                                </h3>
                                <div id="faq-content-18" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Semua layanan perizinan yang menjadi kewenangan Pemprov Jateng</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-19">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        DPMPTSP Kebumen
                                    </button>
                                </h3>
                                <div id="faq-content-19" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Semua layanan perizinan yang menjadi kewenangan Pemkab Kebumen</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-20">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Disnaker KUKM
                                    </button>
                                </h3>
                                <div id="faq-content-20" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Rekomendasi BBM UMK</li>
                                        <li>Izin Koperasi dan Pelayanan Koperasi</li>
                                        <li>Kartu Kuning</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-21">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Imigrasi
                                    </button>
                                </h3>
                                <div id="faq-content-21" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Permohonan Paspor (khusus tenaga kerja)</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-22">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BP3TKI
                                    </button>
                                </h3>
                                <div id="faq-content-22" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pelayanan terkait penempatan dan perlindungan Tenaga Kerja Indonesia</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-23">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Disarpus
                                    </button>
                                </h3>
                                <div id="faq-content-23" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Layanan baca di tempat</li>
                                        <li>Layanan komputer dan internet</li>
                                        <li>Layanan koleksi digital.(*)</li>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MPP</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by MPP Group</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-user/js/main.js') }}"></script>

</body>

</html>