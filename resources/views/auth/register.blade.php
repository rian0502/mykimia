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
                <a href="login.html">
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
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div id="picture">
                        {{-- <img src="/Assets/admin/vendors/images/bg-login.png" /> --}}
                        <img src="/Assets/admin/vendors/images/register-page-img.png" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form class="tab-wizard2 wizard-circle wizard" action="" method="" enctype="multipart/form-data">
                                @csrf
                                <h5>Kredensial Akun Dasar</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row mt-5">
                                            <label class="col-sm-4 col-form-label">Alamat Email*</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Username*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div> --}}
                                        <div class="form-group row ">
                                            <label class="col-sm-4 col-form-label">Kata Sandi*</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Konfirmasi Kata Sandi*</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Informasi pribadi</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Nama Lengkap*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
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
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Angkatan*</label>
                                            <div class="col-sm-8">
                                                <input class="form-control year-picker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                {{-- <h5>Informasi Ikhtisar</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <ul class="register-info">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Alamat Email</div>
                                                    <div class="col-sm-8">putuputrae@gmail.com</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Username</div>
                                                    <div class="col-sm-8">Putu Putra</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Kata Sandi</div>
                                                    <div class="col-sm-8">123456789</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Nama Lengkap</div>
                                                    <div class="col-sm-8">Putu Putra Eka Persada</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">NPM</div>
                                                    <div class="col-sm-8">2017051016</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Angkatan</div>
                                                    <div class="col-sm-8">2020</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="custom-control custom-checkbox mt-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                            <label class="custom-control-label" for="customCheck1">Saya telah membaca dan menyetujui persyaratan layanan dan kebijakan privasi</label>
                                        </div>
                                    </div>
                                </section> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
        data-backdrop="static">
        Launch modal
    </button>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Formulir Terkirim!</h3>
                    <div class="mb-30 text-center">
                        <img src="/Assets/admin/vendors/images/success.png" />
                    </div>
                    Silakan masuk ke akun Anda untuk melanjutkan
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/login" class="btn btn-primary">Selesai</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->

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
