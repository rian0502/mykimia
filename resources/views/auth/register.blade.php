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
                <a href="/">
                    <img src="/Assets/admin/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="/login">Masuk</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- success Popup html End -->
    <div class="justify-content-center" style="padding: 100px">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="pd-20 card-box mb-30">
                <form action="{{ route('lab.ruang.store') }}" method="POST">
                    @csrf
                    <div class="profile-edit-list row">
                        {{-- form untuk sebelah kiri --}}
                        <div class="weight-500 col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 col-form-label">Alamat Email*</label>
                                <div class="col-sm-8">
                                    <input type="email"
                                        class="form-control @error('email') form-control-danger @enderror"
                                        name="email" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 col-form-label">Kata Sandi*</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password"
                                        class="form-control @error('password') form-control-danger @enderror" />
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 col-form-label">Konfirmasi Kata Sandi*</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password_confirm"
                                        class="form-control @error('password_confirm') form-control-danger @enderror" />
                                    @error('password_confirm')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- form untuk sebelah kanan --}}
                        <div class="merek weight-500 col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Lengkap*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama_lengkap"
                                        class="form-control @error('nama_lengkap') form-control-danger @enderror" />
                                    @error('nama_lengkap')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-4 col-form-label">Jenis Kelamin*</label>
                                <div class="col-sm-8">
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="male" name="gender"
                                            class="custom-control-input" />
                                        <label class="custom-control-label" for="male">Pria</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="female" name="gender"
                                            class="custom-control-input" />
                                        <label class="custom-control-label" for="female">Wanita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NPM*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="npm"
                                        class="form-control @error('npm') form-control-danger @enderror" />
                                    @error('npm')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Angkatan*</label>
                                <div class="col-sm-8">
                                    <input name="angkatan"
                                        class="form-control year-picker @error('angkatan') form-control-danger @enderror"
                                        type="text">
                                    @error('angkatan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="submit btn btn-primary">Submit</button>
                    </div>

                </form>
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
