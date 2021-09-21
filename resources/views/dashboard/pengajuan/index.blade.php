@extends('dashboard.templates.master-warga')

@section('content')



    <section class="mt-5" style="margin-top: 100px!important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengjuan Saya</h6>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Jenis Surat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $m)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $m->name }}</td>


                                                <td><a
                                                        href="{{ url('/' . 'dashboard/pengajuan/warga/' . $m->id) }}">{{ $m->surat }}</a>
                                                </td>

                                                <td class="d-flex justify-content-center">
                                                    @if ($m->status == 'Pending')
                                                        <button class="btn btn-sm btn-warning">{{ $m->status }}</button>
                                                    @elseif ($m->status == 'Confirmed')
                                                        <button class="btn btn-sm btn-info">{{ $m->status }}</button>
                                                    @else
                                                        <button class="btn btn-sm btn-success">{{ $m->status }}</button>
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
        </div>
    </section>

@endsection
