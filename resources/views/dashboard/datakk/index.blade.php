@extends('dashboard.templates.master')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>No KK</th>
                      <th>Dusun</th>
                      <th>Kepala Keluarga</th>
                      <th>RT/RW</th>
                      <th>Jumlah Anggota</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $m)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td><a href="{{url('dashboard/datakk/data/'.$m->id)}}">{{$m->no_kk}}</a></td>
                              <td>{{$m->alamat}}</td>
                              <td>{{$m->nama_lengkap}}</td>
                              <td>{{$m->rt}}/{{$m->rw}}</td>
                              <td>0</td>
                              <td class="d-flex justify-content-center">
                                @if (Helper::permission()->edit == 1)
                                  <a href="{{Helper::permission()->url . '/' . $m->id . '/edit'}}" class="btn btn-sm btn-primary btn-circle mr-2">
                                      <i data-feather="edit-2"></i>
                                  </a>
                                @endif
                                @if (Helper::permission()->delete)
                                  @php
                                    $linkdelete = Helper::permission()->url . '/' . $m->id
                                  @endphp
                                  <a onclick='modal_konfir("{{ $linkdelete }}")' class="btn btn-sm btn-danger btn-circle mr-2" href="#">
                                    <i data-feather="trash"></i>
                                  </a>
                                @endif
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection