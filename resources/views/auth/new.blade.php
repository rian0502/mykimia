<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <li><a href="{{ route('auth.login') }}">Kembali</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">

                    <div id="picture">
                        <img src="/Assets/admin/vendors/images/register-page-img.png" alt="" />
                        {{-- <img src="/Assets/admin/vendors/images/bg-login.png" /> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
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
                                    <div class=" row">

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
</body>

</html>
