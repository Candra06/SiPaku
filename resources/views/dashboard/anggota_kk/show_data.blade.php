@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Warga</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="">Nomor KK <span style="color: red">*</span></label>
                            <h6>{{ $data->no_kk }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">NIK <span style="color: red">*</span></label>
                            <h6>{{ $data->nik }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Nama Lengkap <span style="color: red">*</span></label>
                            <h6>{{ $data->nama_lengkap }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Status Keluarga <span style="color: red">*</span></label>
                            <h6>{{ $data->status_hubungan }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Jenis Kelamin <span style="color: red">*</span></label>
                            <h6>{{ $data->jenis_kelamin }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Tempat/Tanggal Lahir</label>
                            <h6>{{ $data->tempat_lahir.'/'.$data->tgl_lahir }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Golongan Darah</label>
                            <h6>{{ $data->golongan }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Agama</label>
                            <h6>{{ $data->religi }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Pendidikan Akhir</label>
                            <h6>{{ $data->pendidikan }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Pekerjaan</label>
                            <h6>{{ $data->profesi }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Penghasilan</label>
                            <h6>{{ $data->pendapatan }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Status Perkawinan</label>
                            <h6>{{ $data->status_kawin }}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Nomor Paspor</label>
                            <h6>{{ $data->no_paspor == '' ? '-' : $data->no_paspor}}</h6>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="">Tanggal Akhir Paspor</label>
                            <h6>{{ $data->tgl_akhir_paspor  == '' ? '-' : $data->tgl_akhir_paspor}}</h6>
                        </div>




                    </div>
                </div>
            </div>

        @endsection
