<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Monster Galaxy Gym</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->

    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xxl position-relative d-flex align-items-center justify-content-between">

            <a class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('img/logo.png') }}" alt="">
                <h1 class="sitename">Monster Galaxy Gym</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#facilities">Facility</a></li>
                    <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 content-col" data-aos="fade-up">
                        <div class="content">

                            <div class="main-heading">
                                <h1><br>YOUR MUSCLE PAIN IS A REFLECTION OF YOUR HEALTH</h1>
                            </div>

                            <div class="divider"></div>

                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="zoom-out">
                        <div class="visual-content">
                            <div class="fluid-shape">
                                <img src="{{ asset('img/abstract/logo.png') }}" alt="Abstract Fluid Shape"
                                    class="fluid-img">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <div><span>History How its Founded</span> <span class="description-title"></span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-image position-relative">
                            <img src="{{ asset('img/about/about.jpg') }}" class="img-fluid w-75 rounded-4 shadow-sm"
                                alt="About Image" loading="lazy">
                            <div class="experience-badge">
                                <span class="years">18+</span>
                                <span class="text">Years of Expertise</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <h2>Established to provide an affordable solution for exercising beyond just at home.</h2>
                            <p class="lead">
                            <p>
                                Memberikan solusi untuk olahraga murah di luar rumah, Monster Galaxy
                                Gym telah berdiri sejak tahun 2007. Tempat ini sudah memiliki banyak member dari
                                berbagai kalangan. Fasilitas ini dikenal dan masih bersaing di masyarakat sebagai salah
                                satu tempat olahraga termurah di Pasuruan.
                            </p>
                            <p>
                                Monster Galaxy Gym menawarkan fasilitas lengkap, mulai dari perlengkapan safety, alat
                                freeweight, mesin, alat kardio, hingga tempat untuk sekadar nongkrong sebelum dan
                                sesudah latihan. Karena tempatnya tidak terlalu besar, setiap harinya kita bisa
                                merasakan interaksi sosial yang sangat kuat dan akrab di tempat ini.
                            </p>
                            </p>

                            <a href="#facilities" class="btn btn-primary mt-4">Explore Our Facilities</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="facilities" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Facilities</h2>
                <div><span>Check Our</span> <span class="description-title">Facility</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-map"></i>
                            </div>
                            <a class="d-flex align-items-center justify-content-center ">
                            </a>
                            <h3>
                                <a>
                                    Lokasi<span>Strategis</span>
                                </a>
                            </h3>
                            <p>
                                Posisi Monster Galaxy Gym yang strategis di tengah kota Pasuruan memudahkan
                                aksesibilitas bagi anggota dan pengunjung.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <a class=" d-flex align-items-center justify-content-center ">

                            </a>
                            <h3>
                                <a>
                                    Free<span>Wi-Fi</span>
                                </a>
                            </h3>
                            <p>
                                Monster Galaxy Gym menyediakan akses Wi-Fi gratis di seluruh area gym, memungkinkan
                                anggota untuk tetap terhubung dan mengakses konten online selama berolahraga.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-p-circle"></i>
                            </div>
                            <a href="service-details.html" class=" d-flex align-items-center justify-content-center ">

                            </a>
                            <h3>
                                <a href="service-details.html">
                                    Tempat <span>Parkir Gratis</span>
                                </a>
                            </h3>
                            <p>
                                Monster Galaxy Gym menyediakan area parkir gratis, memastikan kenyamanan
                                bagi anggota yang datang dengan kendaraan pribadi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-inboxes"></i>
                            </div>
                            <a class=" d-flex align-items-center justify-content-center">
                            </a>
                            <h3>
                                <a>
                                    Locker<span>Room</span>
                                </a>
                            </h3>
                            <p>
                                Monster Galaxy Gym menyediakan fasilitas locker room yang aman dan nyaman untuk
                                menyimpan barang-barang pribadi anggota selama berolahraga.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-prescription2"></i>
                            </div>
                            <a class="d-flex align-items-center justify-content-center ">

                            </a>
                            <h3>
                                <a>
                                    Safety<span>& P3K</span>
                                </a>
                            </h3>
                            <p>
                                Monster Galaxy Gym dilengkapi dengan perlengkapan keselamatan dan P3K untuk
                                memastikan keamanan anggota selama berolahraga, memberikan rasa aman dan nyaman.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="bi bi-person-standing"></i>
                                <i class="bi bi-person-standing-dress"></i>
                            </div>
                            <a class="d-flex align-items-center justify-content-center">

                            </a>
                            <h3>
                                <a>
                                    Kamar<span>Mandi</span>
                                </a>
                            </h3>
                            <p>
                                Monster Galaxy Gym menyediakan fasilitas kamar mandi yang bersih dan nyaman
                                untuk anggota, memastikan pengalaman berolahraga yang menyenangkan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Services Section -->






        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <div><span>content &</span> <span class="description-title">activity gallery</span></div>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    {{-- <img src="{{ asset('storage/' . $activity[0]->picture) }}" class="img-fluid" alt=""> --}}
                                    <img src="{{ isset($activity[0]) && !empty($activity[0]->picture) ? asset('storage/' . $activity[0]->picture) : asset('img/abstract/logo.png') }}"
                                        class="img-fluid" alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            {{-- <div class="entry-meta">{{ $activity[0]->name }}</div>
                                            <h3 class="entry-title">{{ $activity[0]->description }}</h3> --}}
                                            @if (!empty($activity[0]))
                                                <div class="entry-meta">{{ $activity[0]->name }}</div>
                                                <h3 class="entry-title">{{ $activity[0]->description }}</h3>
                                            @else
                                                <div class="entry-meta text-muted">Tidak ada aktivitas</div>
                                                <h3 class="entry-title">Deskripsi belum tersedia</h3>
                                            @endif
                                            <div class="entry-links">
                                                {{-- <a href="{{ asset('storage/' . $activity[0]->picture) }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title:{{ $activity[0]->description }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a> --}}
                                                <a href="{{ !empty($activity[0]->picture) ? asset('storage/' . $activity[0]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title:{{ $activity[0]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    {{-- <img src="{{ asset('storage/' . $activity[1]->picture) }}" class="img-fluid"
                                        alt="" loading="lazy"> --}}
                                        <img src="{{ isset($activity[1]) && !empty($activity[1]->picture) ? asset('storage/' . $activity[1]->picture) : asset('img/abstract/logo.png') }}"
                                        class="img-fluid" alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[1]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[1]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[1]->picture) ? asset('storage/' . $activity[1]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-development"
                                                    data-glightbox="title:{{ $activity[1]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[2]) && !empty($activity[2]->picture) ? asset('storage/' . $activity[2]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[2]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[2]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[2]->picture) ? asset('storage/' . $activity[2]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-photography"
                                                    data-glightbox="title:{{ $activity[2]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[3]) && !empty($activity[3]->picture) ? asset('storage/' . $activity[3]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[3]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[3]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[3]->picture) ? asset('storage/' . $activity[3]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-marketing"
                                                    data-glightbox="title:{{ $activity[3]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[4]) && !empty($activity[4]->picture) ? asset('storage/' . $activity[4]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[4]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[4]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[4]->picture) ? asset('storage/' . $activity[4]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title:{{ $activity[4]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[5]) && !empty($activity[5]->picture) ? asset('storage/' . $activity[5]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[5]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[5]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[5]->picture) ? asset('storage/' . $activity[5]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-development"
                                                    data-glightbox="title:{{ $activity[5]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[6]) && !empty($activity[6]->picture) ? asset('storage/' . $activity[6]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[6]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[6]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[6]->picture) ? asset('storage/' . $activity[6]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-photography"
                                                    data-glightbox="title:{{ $activity[6]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ isset($activity[7]) && !empty($activity[7]->picture) ? asset('storage/' . $activity[7]->picture) : asset('img/abstract/logo.png') }}" class="img-fluid"
                                        alt="" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $activity[7]->name ?? 'Tanpa Nama' }}</div>
                                            <h3 class="entry-title">{{ $activity[7]->description ?? 'Tanpa Deskripsi' }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ !empty($activity[7]->picture) ? asset('storage/' . $activity[7]->picture) : asset('img/abstract/logo.png') }}"
                                                    class="glightbox" data-gallery="portfolio-gallery-marketing"
                                                    data-glightbox="title:{{ $activity[7]->description ?? 'Tidak ada deskripsi' }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section>


        <!-- Faq Section -->
        <section class="faq-9 faq section" id="faq">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5" data-aos="fade-up">
                        <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                        <p class="faq-description">beberapa pertanyaan mungkin sering ditanyakan perihal seputar
                            lingkungan kami, silahkan cek daftar pertanyaan yang sering kami temui di sini</p>
                        <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                            <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Saya sudah sampai di lokasi tapi tidak menemukan Gym nya, dimana letak lokasi
                                    Gym-nya?</h3>
                                <div class="faq-content">
                                    <p>Lokasi Gym-nya berada tepat di depan Indomaret Jl Ki Hajar Dewantara, terdapat
                                        ruko 2 lantai, karena tempatnya di lantai 2, kita harus naik tangga terlebih
                                        dahulu di sebelah timur </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah menyediakan jasa personal trainer?</h3>
                                <div class="faq-content">
                                    <p>Untuk saat ini kami belum menyediakan jasa personal trainer, akan tetapi tidak
                                        perlu khawatir, instruktur kami siap untuk membantu Anda dalam mencapai tujuan
                                        kebugaran Anda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Kapan saja jadwal operasional Gym?</h3>
                                <div class="faq-content">
                                    <p>Setiap hari kami buka mulai pukul 05.00 hingga 22.00 WIB, kecuali hari Minggu
                                        kami tutup lebih awal yaitu pukul 12.00 WIB.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>saya kebingungan ketika saya baru pertama kali ke gym, apa yang harus saya lakukan?
                                </h3>
                                <div class="faq-content">
                                    <p>Jangan khawatir, kami memiliki instruktur yang siap membantu Anda. Anda bisa
                                        mulai dengan melakukan pemanasan, kemudian mencoba beberapa alat fitness yang
                                        ada. Jika Anda merasa bingung, jangan ragu untuk bertanya kepada instruktur
                                        kami. Sama juga halnya dengan saran terkait diet dan pola hidup anda</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>bagaimana cara saya mendaftar member disini?</h3>
                                <div class="faq-content">
                                    <p>Untuk mendaftar sebagai member, Anda dapat mengunjungi meja pendaftaran yang
                                        terletak di meja instruktur gym kami. Tim kami akan siap membantu Anda untuk
                                        menjadi member
                                        disini. terdapat 2 tipe membership disini yaitu harian dan bulanan. kalau masih
                                        ragu, kami juga mempersilahkan apabila anda ingin hanya sekedar mampir untuk
                                        melihat-lihat fasilitas yang ada. </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>apakah ada nomor yang bisa saya hubungi lebih lanjut?</h3>
                                <div class="faq-content">
                                    <p>silahkan cek di bagian bawah halaman ini terdapat nomor whatsapp yang tertera</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <div><span>Let's</span> <span class="description-title">Connect</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Contact Info Boxes -->
                <div class="row gy-4 mb-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Our Address</h4>
                                <p>Jl. Ki Hajar Dewantara No.19, Tembokrejo, Kec. Purworejo, Kota Pasuruan, Jawa Timur
                                    67118</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Contact</h4>
                                <p>galaxygymtembok@gmail.com</p>
                                <p>@monstergalaxygym</p>
                                <p>+62 822 7468 8881</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="info-content">
                                <h4>Jam Buka</h4>
                                <p>Monday-Saturday: 5 AM - 10 PM</p>
                                <p>Sunday: 5 AM - 12 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Google Maps (Full Width) -->
            <div class="map-section" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.137351038618!2d112.90200577081245!3d-7.668379230028541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7cf53bd0529d3%3A0x39446b92e2d60a5c!2sMONSTER%20GALAXY%20GYM!5e0!3m2!1sid!2sid!4v1751907380964!5m2!1sid!2sid"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>



        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container center">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a>
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        <img src="{{ asset('img/logo.png') }}"class="img-fluid"
                            style="max-width: 140px; position : relative; right: -10px;" alt="">
                        <h1 class="sitename">Monster Galaxy Gym</h1>
                    </a>


                    <div class="social-links d-flex mt-4">
                        <a href="mailto:galaxygymtembok@gmail.com"><i class="bi bi-envelope"></i></a>
                        <a href="https://www.instagram.com/monstergalaxygym/"><i class="bi bi-instagram"></i></a>
                        <a href="https://wa.me/6282274688881"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Facility</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Jl. Ki Hajar Dewantara</p>
                    <p>Nomor 19, Pasuruan</p>
                    <p>Indonesia</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+62 822 7468 8881</span></p>
                    <p><strong>Email:</strong> <span>galaxygymtembok@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1">Monster Galaxy Gym</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://www.instagram.com/gilaangdc/">Gilang Dwi Cahyo</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="assets/js/main.js"></script> --}}

</body>

</html>
