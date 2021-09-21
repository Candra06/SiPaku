@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Menu</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/datakk/anggota/{{ $data->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Nomor KK</label>
                                    <select class="form-control select2" name="state">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" value="{{ $data->nik }}"
                                        class="form-control @error('nik') is-invalid @enderror" placeholder="NIK">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ $data->nama_lengkap }}"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Status Keluarga</label>
                                    <select name="status_keluarga"
                                        class="form-control @error('status_keluarga') is-invalid @enderror" id="">
                                        <option value="">Hubungan Keluarga</option>
                                        <option value="KEPALA KELUARGA" {{$data->status_hubungan == "KEPALA KELUARGA" ? 'selected' : ''}}>KEPALA KELUARGA</option>
                                        <option value="ANAK" {{$data->status_hubungan == "ANAK" ? 'selected' : ''}}>ANAK</option>
                                        <option value="ISTRI" {{$data->status_hubungan == "ISTRI" ? 'selected' : ''}}>ISTRI</option>
                                        <option value="CUCU" {{$data->status_hubungan == "CUCU" ? 'selected' : ''}}>CUCU</option>
                                        <option value="FAMILI LAIN" {{$data->status_hubungan == "FAMILI LAIN" ? 'selected' : ''}}>FAMILI LAIN</option>
                                        <option value="ORANG TUA" {{$data->status_hubungan == "ORANG TUA" ? 'selected' : ''}}>ORANG TUA</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Status Perkawinan</label>
                                    <select name="status_perkawinan"
                                        class="form-control @error('aset') is-invalid @enderror" id="">
                                        <option value="">Status Perkawinan</option>
                                        <option value="Belum Kawin"  {{$data->status_kawin == "Belum Kawin" ? 'selected' : ''}}>Belum Kawin</option>
                                        <option value="Kawin" {{$data->status_kawin == "Kawin" ? 'selected' : ''}}>Kawin</option>
                                        <option value="Cerai Mati" {{$data->status_kawin == "Cerai Mati" ? 'selected' : ''}}>Cerai Mati</option>
                                        <option value="Cerai Hidup" {{$data->status_kawin == "Cerai Hidup" ? 'selected' : ''}}>Cerai Hidup</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror" id="">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="LAKI-LAKI" {{$data->gender == "LAKI-LAKI" ? 'selected' : ''}}>LAKI-LAKI</option>
                                        <option value="PEREMPUAN" {{$data->gender == "PEREMPUAN" ? 'selected' : ''}}>PEREMPUAN</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        placeholder="Tempat Lahir">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" value="{{ $data->tgl_lahir }}"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        placeholder="Tanggal Lahir">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Golongan Darah</label>
                                    <select name="gol_dar" class="form-control @error('gol_dar') is-invalid @enderror"
                                        id="">
                                        <option value="">Golongan Darah</option>
                                        @foreach ($golDar as $item)
                                            <option value="{{ $item->id }}"  {{$data->gol_dar == $item->id ? 'selected' : ''}}>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Agama</label>
                                    <select name="agama" class="form-control @error('agama') is-invalid @enderror" id="">
                                        <option value="">Agama</option>
                                        @foreach ($agama as $item)
                                            <option value="{{ $item->id }}" {{$data->agama == $item->id ? 'selected' : ''}}>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Pendidikan Akhir</label>
                                    <select name="pend_akhir"
                                        class="form-control @error('pend_akhir') is-invalid @enderror" id="">
                                        <option value="">Pendidikan Akhir</option>
                                        @foreach ($pendidikan as $item)
                                            <option value="{{ $item->id }}" {{$data->pend_akhir == $item->id ? 'selected' : ''}}>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Jenis Pekerjaan</label>
                                    <select name="jenis_pekerjaan[]"
                                        class="form-control @error('jenis_pekerjaan') is-invalid @enderror" id="">
                                        @foreach ($pekerjaan as $item)
                                            <option value="{{ $item->id }}" {{$data->pekerjaan == $item->id ? 'selected' : ''}}>{{ $item->nama }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Rentang Penghasilan</label>
                                    <select name="rentang_penghasilan[]"
                                        class="form-control @error('rentang_penghasilan') is-invalid @enderror" id="">
                                        <option value="">Rentang Penghasilan</option>
                                        @foreach ($penghasilan as $item)
                                            <option value="{{ $item->id }}" {{$data->penghasilan == $item->id ? 'selected' : ''}}>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-between ">
                                <div></div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/jquery/jquery.min.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('assets/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            // For select 2
            $(".select2").select2()

        });
    </script>
@endsection
