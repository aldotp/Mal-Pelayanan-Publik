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
                    <li><a href="/pengajuan" class="active">Pengajuan</a></li>
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
                    <li><a href="/pengajuan" class="active">Pengajuan</a></li>
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
                                <h2>Pengajuan Mal Pelayanan Publik</h2>
                                <p>Begitu banyaknya permasalahan dalam pelayanan publik yang diselenggarakan pemerintah, maka sangat perlu dilakukan suatu perubaahan atau reformasi melalui perbaikan pelayanan publik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="container">
                        <ol>
                            <li><a href="/">Beranda</a></li>
                            <li>Pengajuan</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container mb-5" data-aos="fade-up">

                <div class="section-header">
                    <span>Halaman Pengajuan</span>
                    <h2>Halaman Pengajuan</h2>

                </div>

                <div class="text-center">
                    <a href="/pengajuan/create" class="btn btn-primary">Tambah Data</a>
                </div>
                <table class="table mt-5 text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Perihal</th>
                            <th>Deskripsi</th>
                            <th>Nama Layanan</th>
                            <th>Syarat Layanan</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->perihal}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->nama_layanan}}</td>
                            <td>{{$item->nama}}</td>
                            <td>
                                @if ($item->upload)
                                <a href="{{ url('files').'/'.$item->upload}}">Bukti</a>
                                @endif
                            </td>
                            @if ($item->status == 0)
                            <td class="text-primary"><b>Pending</b></td>
                            @elseif($item->status == 1)
                            <td style="color: green;"><b>Approve</b></td>
                            @else
                            <td class="text-danger"><b>Gagal</b></td>
                            @endif
                            {{-- <td>{{$item->status}}</td> --}}
                            <td>
                                <div class="d-flex flex-row">
                                    <div>
                                        <a class="btn btn-secondary btn-sm" href="{{ url('/pengajuan/'.$item->id) }}">Detail</a>
                                    </div>
                                    <div>
                                        <a class="btn btn-warning btn-sm" href="{{ url('/pengajuan/'.$item->id. '/edit') }}">Edit</a>
                                    </div>
                                    <div>

                                        <form action="{{ '/pengajuan/'.$item->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>

            </div>
            </td>
            </tr>
            @endforeach
            </thead>
            </table>

            {{-- {{ $data->links() }} --}}

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