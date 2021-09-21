<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">

    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logoweb.png') }}" width="120" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <span class="navbar-text">
                {{-- Navbar text with an inline element --}}
            </span>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/'.'dashboard/homes/index')}}#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/'.'dashboard/homes/index')}}#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/'.'dashboard/pengajuan/warga')}}">Pengajuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal"
                    data-target="#exampleModalLg">LogOut</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
