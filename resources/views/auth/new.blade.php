<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="justify-content-center">
        <div class="main-container ">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px" style="padding-right:300px;padding-left:300px;">

                    <!-- Default Basic Forms Start -->
                    <div class="pd-20 card-box mb-30" style="margin-top: -80px; ">
                        <div class="clearfix">
                            {{-- <div class="login-title">
                                <h2 class="text-center text-primary">Daftar Akun</h2>
                            </div>
                            <h6 class="mb-20" style="text-align: center;">
                                Silakan isi formulir di bawah ini untuk mendaftar
                            </h6> --}}

                        </div>
                        <form>
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
                                {{-- kanan --}}
                                <div class="weight-500 col-md-6">
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
                                        <label for="">NPM</label>
                                        <input type="text" name="npm"
                                            class="form-control @error('npm') form-control-danger @enderror" />
                                        @error('npm')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
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
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
