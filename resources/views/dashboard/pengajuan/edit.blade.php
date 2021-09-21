@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h4 class="m-0 font-weight-bold text-primary">Detail Pengajuan </h4>
                        @if ($data->status == 'Confirm')
                            <button class="btn btn-md btn-primary">Unduh Surat</button>
                        @endif
                    </div>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Nama Warga</label>
                            <h6>{{ $data->name }}</h6>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Nomor Telepon</label>
                            <h6>{{ $data->telepon }}</h6>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Jenis Surat</label>
                            <h6>{{ $data->surat }}</h6>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Keperluan</label>
                            <h6>{{ $data->keperluan }}</h6>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Tanggal Pengajuan</label>
                            <h6>{{ Helper::formatTanggal($data->created_at) }}</h6>

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <h6>{{ $data->status }}</h6>
                        </div>
                    </div>

                </div>
                @if ($data->status == 'Pending')
                    <div class="card-footer">
                        <div class="col-lg-12 d-flex justify-content-between" id="submit">
                            <form action="/dashboard/pengajuan/surat/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" name="status" value="Tolak" id="">
                                <button class="btn btn-danger" type="submit">Tolak</button>
                            </form>
                            <form action="/dashboard/pengajuan/surat/{{ $data->id }}" method="POST">
                                @method('put')
                                @csrf
                                <input type="hidden" name="status" value="Confirm" id="">
                                <button class="btn btn-success" type="submit">Terima</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
