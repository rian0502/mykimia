<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Chemistry Program Data Center</title>

    <!-- Favicon -->
    <link href="/Assets/src/img/unila.png" rel="icon">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/Assets/admin/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/Assets/admin/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/Assets/admin/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="/Assets/admin/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="">
                    <img src="/Assets/admin/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="{{ route('auth.login') }}">Kembali</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    {{-- <div id="picture">
                    </div> --}}
                    <div id="">
                        <img src="/Assets/admin/vendors/images/register-page-img.png" alt="" />
                        {{-- <img src="/Assets/admin/vendors/images/bg-login.png" /> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class=" bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <div class="pd-20 card-box mb-30 mt-lg-5" id="" style="">
                                <div class="clearfix">
                                    <div class="login-title">
                                        <h2 class="text-center text-primary">Daftar Akun</h2>
                                    </div>
                                    <h6 class="mb-lg-5 mt-3" style="text-align: center;">
                                        Silakan isi formulir di bawah ini untuk mendaftar
                                    </h6>

                                </div>
                                <form class="mt-5" action="{{ route('auth.register.post') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="profile-edit-list row">

                                        {{-- kiri --}}
                                        <div class="weight-500 col-md-6">
                                            <div class="form-group">
                                                <label for="">Alamat Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') form-control-danger @enderror"
                                                    name="email" />
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap"
                                                    class="form-control @error('nama_lengkap') form-control-danger @enderror" />
                                                @error('nama_lengkap')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Angkatan</label>
                                                <input name="angkatan"
                                                    class="form-control year-picker @error('angkatan') form-control-danger @enderror"
                                                    type="text">
                                                @error('angkatan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <div class="">
                                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                                        <input type="radio" id="male" name="gender"
                                                            class="custom-control-input" />
                                                        <label class="custom-control-label" for="male">Pria</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                                        <input type="radio" id="female" name="gender"
                                                            class="custom-control-input" />
                                                        <label class="custom-control-label"
                                                            for="female">Wanita</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        {{-- kanan --}}
                                        <div class="weight-500 col-md-6">
                                            <div class="form-group">
                                                <label for="">NPM</label>
                                                <input type="text" name="npm"
                                                    class="form-control @error('npm') form-control-danger @enderror" />
                                                @error('npm')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="">Kata Sandi</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') form-control-danger @enderror" />
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Konfirmasi Kata Sandi</label>
                                                <input type="password" name="password_confirm"
                                                    class="form-control @error('password_confirm') form-control-danger @enderror" />
                                                @error('password_confirm')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-0">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg btn-block">Daftar</button>
                                            </div>
                                            <div class="font-16 weight-600 pt-10 pb-10 text-center"
                                                data-color="#707373">

                                            </div>
                                            <div class="input-group mb-0">
                                                {{-- <a class="btn btn-outline-primary btn-lg btn-block"
                                            href="{{ route('auth.login') }}">Masuk Akun</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="/Assets/admin/vendors/scripts/core.js"></script>
    <script src="/Assets/admin/vendors/scripts/script.min.js"></script>
    <script src="/Assets/admin/vendors/scripts/process.js"></script>
    <script src="/Assets/admin/vendors/scripts/layout-settings.js"></script>
    <script src="/Assets/admin/src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="/Assets/admin/vendors/scripts/steps-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>





</html>
