@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data KK</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/datakk/data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor KK <span style="color: red">*</span></label>
                                <h6>{{$data->no_kk}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Alamat <span style="color: red">*</span></label>
                                <h6>{{$data->alamat}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor RT <span style="color: red">*</span></label>
                                <h6>{{$data->rt}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor RW <span style="color: red">*</span></label>
                                <h6>{{$data->rw}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Kondisi Rumah <span style="color: red">*</span></label>
                                <h6>{{$data->kondisi_rumah}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Jenis Usaha</label>
                                <h6>{{$data->nama}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Status Kepemilikan Tanah</label>
                                <h6>{{$data->kepemilikan_tanah}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Aset</label>
                                <h6>{{$data->aset}}</h6>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Jenis Ternak</label>
                                <h6>{{$data->ternak}}</h6>
                            </div>

                            <div class="col-md-12 mt-3 mb-3">
                                <h3>Anggota Keluarga</h3>
                            </div>

                           
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>NIK</th>
                                          <th>Nama Lengkap</th>
                                          <th>Jenis Kelamin</th>
                                          <th>Status Perkawinan</th>
                                          <th>Pekerjaan</th>
                                          <th>Status Hubungan</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($anggota as $m)
                                              <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td><a href="{{url('dashboard/datakk/data/'.$m->id)}}">{{$m->nik}}</a></td>
                                                  
                                                  <td>{{$m->nama_lengkap}}</td>
                                                  <td>{{$m->jenis_kelamin}}</td>
                                                  <td>{{$m->status_kawin}}</td>
                                                  <td>{{$m->nama}}</td>
                                                  <td>{{$m->status_hubungan}}</td>
                                                 
                                              </tr>
                                          @endforeach
                                      </tbody>
                                    </table>
                                  </div>

                            </div>

                           
                        </div>
                    </form>
                </div>
            </div>
          
        @endsection
