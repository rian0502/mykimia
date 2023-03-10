<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chemistry Program Data Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/Assets/src/img/unila.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/Assets/src/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/Assets/src/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/Assets/src/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="/Assets/FontAwesome/css/fontawesome.css" rel="stylesheet">
    <link href="/Assets/FontAwesome/css/brands.css" rel="stylesheet">
    <link href="/Assets/FontAwesome/css/solid.css" rel="stylesheet">
    <!-- FontAwesome -->


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/Assets/src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/Assets/src/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">C P D C</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Prof. Dr. Ir.
                        Soemantri Brodjonegoro, Gedong Meneng, Rajabasa, Bandar Lampung</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>chemistry@fmipa.unila.ac.id</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>0721-704625</small>
                    {{-- <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="{{ route('beranda') }}" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">C P D C</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.html" class="dropdown-item">Quotation</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        {{-- tampil saat mode mobile --}}
                        <div class="login">
                            <a href="{{ route('login') }}" class="nav-item nav-link">Masuk</a>
                        </div>
                        {{-- tampil saat mode mobile --}}
                    </div>

                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-3">Masuk</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    @yield('umum')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Prof. Dr. Ir.
                        Soemantri Brodjonegoro, Gedong Meneng, Rajabasa, Bandar Lampung</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0721-704625</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>chemistry@fmipa.unila.ac.id</p>
                    <div class="d-flex pt-3">
                        {{-- <a class="btn btn-square btn-light rounded-circle me-2" target="_blank"
                            href="https://mobile.twitter.com/HimakiUnila">
                            <i class="fab fa-twitter"></i>
                        </a> --}}
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank"
                            href="https://www.facebook.com/jurkimiafmipaunila/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank"
                            href="https://www.youtube.com/channel/UCyVqvR1r0J7V6Mq_5soQp8w">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank"
                            href="https://www.linkedin.com/in/kimia-fmipa-universitas-lampung-a-3431a2181/?originalSubdomain=id">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;
                    <a class="fw-medium text-light" target="_blank" href="https://kimia.fmipa.unila.ac.id/"> Jurusan
                        KIMIA FMIPA UNILA</a>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>

                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Dirancang Oleh <a class="fw-medium text-light" href="/team">Bayanaka Team</a>
                    {{-- Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Assets/src/lib/wow/wow.min.js"></script>
    <script src="/Assets/src/lib/easing/easing.min.js"></script>
    <script src="/Assets/src/lib/waypoints/waypoints.min.js"></script>
    <script src="/Assets/src/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/Assets/src/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/Assets/src/js/main.js"></script>
</body>

</html>
