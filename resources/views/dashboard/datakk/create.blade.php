@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Data KK</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/datakk/data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor KK <span style="color: red">*</span></label>
                                <input type="text" name="no_kk" value="{{ old('no_kk') }}"
                                    class="form-control @error('no_kk') is-invalid @enderror" placeholder="Nomor KK">
                                @error('no_kk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Alamat <span style="color: red">*</span></label>
                                <select name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                    <option value="">Pilih Dusun/Alamat</option>
                                    <option value="Dusun Krajan">Dusun Krajan</option>
                                    <option value="Dusun Basian">Dusun Basian</option>
                                    <option value="Dusun Taman Kenek">Dusun Taman Kenek</option>
                                    <option value="Dusun Sumber Kenek">Dusun Sumber Kenek</option>
                                </select>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor RT <span style="color: red">*</span></label>
                                <select name="rt" class="form-control @error('rt') is-invalid @enderror">
                                    <option value="">Pilih Nomor RT</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                </select>
                                @error('rt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Nomor RW <span style="color: red">*</span></label>
                                <select name="rw" class="form-control @error('rt') is-invalid @enderror">
                                    <option value="">Pilih Nomor RW</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                                @error('rw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Kondisi Rumah <span style="color: red">*</span></label>
                                <select name="kondisi_rumah"
                                    class="form-control @error('kondisi_rumah') is-invalid @enderror">
                                    <option value="">Pilih Kondisi Rumah</option>
                                    <option value="Layak">Layak</option>
                                    <option value="Tidak Layak">Tidak Layak</option>
                                </select>
                                @error('kondisi_rumah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Jenis Usaha</label>
                                <select name="jenis_usaha" class="form-control @error('jenis_usaha') is-invalid @enderror">
                                    <option value="">Pilih Jenis Usaha</option>
                                    @foreach ($usaha as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Status Kepemilikan Tanah</label>
                                <select name="kepemilikan_tanah"
                                    class="form-control @error('kepemilikan_tanah') is-invalid @enderror">
                                    <option value="">Pilih Status Kepemilikan</option>
                                    <option value="SHM">Sertifikat Hak Milik(SHM)</option>
                                    <option value="SHGB">Sertifikat Hak Guna Bangunan (HGB)</option>
                                    <option value="SHP">Sertifikat Hak Pakai (HP)</option>
                                </select>
                                @error('kepemilikan_tanah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Aset</label>
                                <input type="text" name="aset" value="{{ old('aset') }}"
                                    class="form-control @error('aset') is-invalid @enderror" placeholder="Aset">
                                @error('aset')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Jenis Ternak</label>
                                <select name="jenis_ternak"
                                    class="form-control @error('jenis_ternak') is-invalid @enderror">
                                    <option value="">Pilih Jenis Ternak</option>
                                    @foreach ($ternak as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('icon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12 mt-3 mb-3">
                                <h3>Anggota Keluarga</h3>
                            </div>
                            <div class="col-md-12">
                                <div id="anggotakk">
                                    <fieldset class="form-group border p-3">

                                        <div class="contanier">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">NIK</label>
                                                        <input type="text" name="nik[]" value="{{ old('nik') }}"
                                                            class="form-control @error('nik') is-invalid @enderror"
                                                            placeholder="NIK">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Nama Lengkap</label>
                                                        <input type="text" name="nama[]" value="{{ old('nama') }}"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            placeholder="Nama Lengkap">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Status Keluarga</label>
                                                        <select name="status_keluarga[]"
                                                            class="form-control @error('sttus_keluarga') is-invalid @enderror"
                                                            id="">
                                                            <option value="">Hubungan Keluarga</option>
                                                            <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                                                            <option value="ANAK">ANAK</option>
                                                            <option value="ISTRI">ISTRI</option>
                                                            <option value="CUCU">CUCU</option>
                                                            <option value="FAMILI LAIN">FAMILI LAIN</option>
                                                            <option value="ORANG TUA">ORANG TUA</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Status Perkawinan</label>
                                                        <select name="status_perkawinan[]"
                                                            class="form-control @error('aset') is-invalid @enderror" id="">
                                                            <option value="">Status Perkawinan</option>
                                                            <option value="Belum Kawin">Belum Kawin</option>
                                                            <option value="Kawin">Kawin</option>
                                                            <option value="Cerai Mati">Cerai Mati</option>
                                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Jenis Kelamin</label>
                                                        <select name="jenis_kelamin[]"
                                                            class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                                            id="">
                                                            <option value="">Jenis Kelamin</option>
                                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" name="tempat_lahir[]"
                                                            value="{{ old('tempat_lahir') }}"
                                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                            placeholder="Tempat Lahir">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="date" name="tanggal_lahir[]"
                                                            value="{{ old('tanggal_lahir') }}"
                                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                            placeholder="Tanggal Lahir">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Golongan Darah</label>
                                                        <select name="gol_dar[]"
                                                            class="form-control @error('gol_dar') is-invalid @enderror"
                                                            id="">
                                                            <option value="">Golongan Darah</option>
                                                            @foreach ($golDar as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Agama</label>
                                                        <select name="agama[]"
                                                            class="form-control @error('agama') is-invalid @enderror" id="">
                                                            <option value="">Agama</option>
                                                            @foreach ($agama as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Pendidikan Akhir</label>
                                                        <select name="pend_akhir[]"
                                                            class="form-control @error('pend_akhir') is-invalid @enderror"
                                                            id="">
                                                            <option value="">Pendidikan Akhir</option>
                                                            @foreach ($pendidikan as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Jenis Pekerjaan</label>
                                                        <select name="jenis_pekerjaan[]"
                                                            class="form-control @error('jenis_pekerjaan') is-invalid @enderror"
                                                            id="">
                                                            @foreach ($pekerjaan as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="">Rentang Penghasilan</label>
                                                        <select name="rentang_penghasilan[]"
                                                            class="form-control @error('rentang_penghasilan') is-invalid @enderror"
                                                            id="">
                                                            <option value="">Rentang Penghasilan</option>
                                                            @foreach ($penghasilan as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                            </div>
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="row mt-3 mb-3 button-add">
                                    <div class="col-md-12 mb-3">
                                        <button id="remove-anggota" type="button" class="btn btn-block btn-danger"><span
                                                class="fas fa-minus"></span> Hapus Anggota Keluarga</button>
                                    </div>
                                    <div class="col-md-12">
                                        <button id="add-anggota" type="button" class="btn btn-block btn-success"><span
                                                class="fas fa-plus"></span> Tambah Anggota Keluarga</button>
                                    </div>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <script type="text/javascript">
                // $("#anggotakk:first #remove-anggota").hide();
                var length = $("#anggotakk").length;
                if (length == 1) {
                    $("#remove-anggota").hide();
                }
                $("#add-anggota").click(function() {
                    var clone = $("#anggotakk:first").clone();
                    clone.find("input").val("");
                    $(".button-add").before(clone);
                    length += 1;
                    if (length == 1) {
                        $("#remove-anggota").hide();
                    } else {
                        $("#remove-anggota").show();
                    }
                });


                $("#remove-anggota").click(function() {
                    $("#anggotakk:last").remove();
                    length -= 1;
                    if (length == 1) {
                        $("#remove-anggota").hide();
                    } else {
                        $("#remove-anggota").show();
                    }
                });

                // $("#anggotakk:last-child  #remove-anggota").show();
            </script>

        @endsection
