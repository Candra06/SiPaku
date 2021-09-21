<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hendrawan">
    <meta name="keywords" content="Hendrawan">
    <meta name="author" content="Hendrawan">

    <title>SiPaku | Register</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body text-center">
                                    <div class="h3 mt-3 font-weight-light">Register SiPaku</div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <form class="theme-form" method="POST" action="{{ url('daftar') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="email">Nama Lengkap</label>
                                            <input name="name" value="{{ old('name') }}"
                                                class="form-control form-control-solid py-4 @error('name') is-invalid @enderror"
                                                type="text" aria-label="Nama Lengkap" aria-describedby="name" />
                                            @error('name')
                                                <p class="ml-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="email">Telepon</label>
                                            <input name="telepon" value="{{ old('telepon') }}"
                                                class="form-control form-control-solid py-4 @error('telepon') is-invalid @enderror"
                                                type="text" aria-label="telepon Address" aria-describedby="telepon" />
                                            @error('telepon')
                                                <p class="ml-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="email">Email address</label>
                                            <input name="email" value="{{ old('email') }}"
                                                class="form-control form-control-solid py-4 @error('email') is-invalid @enderror"
                                                type="text" aria-label="Email Address" aria-describedby="email" />
                                            @error('email')
                                                <p class="ml-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="password">Password</label>
                                            <input name="password" value="{{ old('password') }}"
                                                class="form-control form-control-solid py-4 @error('password') is-invalid @enderror"
                                                type="password" aria-label="Password" aria-describedby="password" />
                                            @error('password')
                                                <p class="ml-2 text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                               
                                                <a href="{{url('/login')}}">Login</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; <a href="">KKN BTV 3 UNEJ</a> 2021</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Warga Localhosts</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
