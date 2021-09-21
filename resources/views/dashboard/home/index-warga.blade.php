@extends('dashboard.templates.master-warga')
@section('content')
    @php
    date_default_timezone_set('Asia/Jakarta');
    $time = date('H:i');
    @endphp

    <section id="home">
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('assets/img/1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('assets/img/3.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="layanan" class="mt-5 mb-5">
        <div class="container  mt-5">
          <h1 class="text-center">Layanan Pengajuan Surat Umum</h1>
            <div class="row mt-5">
                @foreach ($data as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center">{{$item->surat}}</h5>
                                
                                <p class="card-text text-center">{{ $item->deskripsi}}</p>
                            </div>
                            <div class="card-footer">
                              <a href="{{ url('/').'/dashboard/pengajuan/warga/'.$item->id}}" class="btn btn-block btn-primary">Ajukan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="bg-light m-0">
        <div class="p-3">
            <p class="text-center text-dark" style="margin-bottom: 0px">Copyright 2021@SiPaku - KKN BTV 3</p>
        </div>

    </footer>

@endsection
