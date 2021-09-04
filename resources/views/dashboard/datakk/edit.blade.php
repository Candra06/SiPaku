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
                                <input type="text" name="no_kk" value="{{ $data['no_kk'] }}"
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
                                    <option value="Dusun Krajan" {{ $data->alamat == 'Dusun Krajan' ? 'selected' : '' }}>
                                        Dusun Krajan</option>
                                    <option value="Dusun Basian" {{ $data->alamat == 'Dusun Basian' ? 'selected' : '' }}>
                                        Dusun Basian</option>
                                    <option value="Dusun Taman Kenek"
                                        {{ $data->alamat == 'Dusun Taman Kenek' ? 'selected' : '' }}>Dusun Taman Kenek
                                    </option>
                                    <option value="Dusun Sumber Kenek"
                                        {{ $data->alamat == 'Dusun Sumber Kenek' ? 'selected' : '' }}>Dusun Sumber Kenek
                                    </option>
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
                                    <option value="01" {{ $data->rt == '01' ? 'selected' : '' }}>01</option>
                                    <option value="02" {{ $data->rt == '02' ? 'selected' : '' }}>02</option>
                                    <option value="03" {{ $data->rt == '03' ? 'selected' : '' }}>03</option>
                                    <option value="04" {{ $data->rt == '04' ? 'selected' : '' }}>04</option>
                                    <option value="05" {{ $data->rt == '05' ? 'selected' : '' }}>05</option>
                                    <option value="06" {{ $data->rt == '06' ? 'selected' : '' }}>06</option>
                                    <option value="07" {{ $data->rt == '07' ? 'selected' : '' }}>07</option>
                                    <option value="08" {{ $data->rt == '08' ? 'selected' : '' }}>08</option>
                                    <option value="09" {{ $data->rt == '09' ? 'selected' : '' }}>09</option>
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

                                    <option value="01" {{ $data->rw == '01' ? 'selected' : '' }}>01</option>
                                    <option value="02" {{ $data->rw == '02' ? 'selected' : '' }}>02</option>
                                    <option value="03" {{ $data->rw == '03' ? 'selected' : '' }}>03</option>
                                    <option value="04" {{ $data->rw == '04' ? 'selected' : '' }}>04</option>
                                    <option value="05" {{ $data->rw == '05' ? 'selected' : '' }}>05</option>
                                    <option value="06" {{ $data->rw == '06' ? 'selected' : '' }}>06</option>
                                    <option value="07" {{ $data->rw == '07' ? 'selected' : '' }}>07</option>
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
                                    <option value="Layak" {{ $data->kondisi_rumah == 'Layak' ? 'selected' : '' }}>Layak
                                    </option>
                                    <option value="Tidak Layak"
                                        {{ $data->kondisi_rumah == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>
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
                                    <option value="Ternak" {{ $data->jenis_usaha == 'Ternak' ? 'selected' : '' }}>Ternak</option>
                                    <option value="Perdagangan" {{ $data->jenis_usaha == 'Perdagangan' ? 'selected' : '' }}>Perdagangan
                                    </option>
                                    <option value="Pertanian" {{ $data->jenis_usaha == 'Pertanian' ? 'selected' : '' }}>Pertanian
                                    </option>
                                    <option value="Perkebunan" {{ $data->jenis_usaha == 'Perkebunan' ? 'selected' : '' }}>Perkebunan
                                    </option>
                                </select>


                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Status Kepemilikan Tanah</label>
                                <select name="kepemilikan_tanah"
                                    class="form-control @error('kepemilikan_tanah') is-invalid @enderror">
                                    <option value="">Pilih Status Kepemilikan</option>
                                    <option value="SHM" {{$data->kepemilikan_tanah == 'SHM' ? 'selected' : ''}}>Sertifikat Hak Milik(SHM)</option>
                                    <option value="SHGB" {{$data->kepemilikan_tanah == 'SHGP' ? 'selected' : ''}}>Sertifikat Hak Guna Bangunan (HGB)</option>
                                    <option value="SHP" {{$data->kepemilikan_tanah == 'SHP' ? 'selected' : ''}}>Sertifikat Hak Pakai (HP)</option>
                                </select>
                                @error('kepemilikan_tanah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="">Aset</label>
                                <input type="text" name="aset" value="{{ $data->aset }}"
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
                                    <option value="Sapi" {{$data->ternak == 'Sapi' ? 'selected' : ''}}>Sapi</option>
                                    <option value="Kambing" {{$data->ternak == 'Kambing' ? 'selected' : ''}}>Kambing</option>
                                    <option value="Ayam" {{$data->ternak == 'Ayam' ? 'selected' : ''}}>Ayam</option>
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
                               @foreach ($anggota as $item)
                               <div id="anggotakk">
                                <fieldset class="form-group border p-3">

                                    <div class="contanier">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="">NIK</label>
                                                    <input type="text" name="nik[]" value="{{ $item->nik }}"
                                                        class="form-control @error('nik') is-invalid @enderror"
                                                        placeholder="NIK">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Nama Lengkap</label>
                                                    <input type="text" name="nama[]" value="{{ $item->nama_lengkap }}"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        placeholder="Nama Lengkap">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Status Keluarga</label>
                                                    <select name="status_keluarga[]"
                                                        class="form-control @error('sttus_keluarga') is-invalid @enderror"
                                                        id="">
                                                        <option value="">Hubungan Keluarga</option>
                                                        <option value="KEPALA KELUARGA" {{$item->hubungan_keluarga == 'KEPALA KELUARGA' ? 'selected' : ''}}>KEPALA KELUARGA</option>
                                                        <option value="ANAK" {{$item->hubungan_keluarga == 'ANAK' ? 'selected' : ''}}>ANAK</option>
                                                        <option value="ISTRI" {{$item->hubungan_keluarga == 'ISTRI' ? 'selected' : ''}}>ISTRI</option>
                                                        <option value="CUCU" {{$item->hubungan_keluarga == 'CUCU' ? 'selected' : ''}}>CUCU</option>
                                                        <option value="FAMILI LAIN" {{$item->hubungan_keluarga == 'FAMILI LAIN' ? 'selected' : ''}}>FAMILI LAIN</option>
                                                        <option value="ORANG TUA" {{$item->hubungan_keluarga == 'ORANG TUA' ? 'selected' : ''}}>ORANG TUA</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Status Perkawinan</label>
                                                    <select name="status_perkawinan[]"
                                                        class="form-control @error('aset') is-invalid @enderror" id="">
                                                        <option value="">Status Perkawinan</option>
                                                        <option value="Belum Kawin" {{$item->status_kawin == 'Belum Kawin' ? 'selected' : ''}}>Belum Kawin</option>
                                                        <option value="Kawin" {{$item->status_kawin == 'Kawin' ? 'selected' : ''}}>Kawin</option>
                                                        <option value="Cerai Mati" {{$item->status_kawin == 'Cerai Mati' ? 'selected' : ''}}>Cerai Mati</option>
                                                        <option value="Cerai Hidup" {{$item->status_kawin == 'Cerai Hidup' ? 'selected' : ''}}>Cerai Hidup</option>
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
                                                        <option value="LAKI-LAKI" {{$item->jenis_kelamin == 'LAKI-LAKI' ? 'selected' : ''}}>LAKI-LAKI</option>
                                                        <option value="PEREMPUAN" {{$item->jenis_kelamin == 'PEREMPUAN' ? 'selected' : ''}}>PEREMPUAN</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir[]"
                                                        value="{{ $item->tempat_lahir }}"
                                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                        placeholder="Tempat Lahir">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir[]"
                                                        value="{{ $item->tgl_lahir }}"
                                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                        placeholder="Tanggal Lahir">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Golongan Darah</label>
                                                    <select name="gol_dar[]"
                                                        class="form-control @error('gol_dar') is-invalid @enderror"
                                                        id="">
                                                        <option value="">Golongan Darah</option>
                                                        <option value="A" {{$item->gol_dar == 'A' ? 'selected' : ''}}>A</option>
                                                        <option value="A+" {{$item->gol_dar == 'A+' ? 'selected' : ''}}>A+</option>
                                                        <option value="B" {{$item->gol_dar == 'B' ? 'selected' : ''}}>B</option>
                                                        <option value="AB" {{$item->gol_dar == 'AB' ? 'selected' : ''}}>AB</option>
                                                        <option value="O" {{$item->gol_dar == 'O' ? 'selected' : ''}}>O</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Agama</label>
                                                    <select name="agama[]"
                                                        class="form-control @error('agama') is-invalid @enderror" id="">
                                                        <option value="">Agama</option>
                                                        <option value="ISLAM" {{$item->agama == 'ISLAM' ? 'selected' : ''}}>ISLAM</option>
                                                        <option value="KRISTEN" {{$item->agama == 'KRISTEN' ? 'selected' : ''}}>KRISTEN</option>
                                                        <option value="HINDU" {{$item->agama == 'HINDU' ? 'selected' : ''}}>HINDU</option>
                                                        <option value="BUDHA" {{$item->agama == 'BUDHA' ? 'selected' : ''}}>BUDHA</option>
                                                        <option value="KATOLIK" {{$item->agama == 'KATOLIK' ? 'selected' : ''}}>KATOLIK</option>
                                                        <option value="PROTESTAN" {{$item->agama == 'PROTESTAN' ? 'selected' : ''}}>PROTESTAN</option>
                                                        <option value="KONGHUCU" {{$item->agama == 'KONGHUCU' ? 'selected' : ''}}>KONGHUCU</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Pendidikan Akhir</label>
                                                    <select name="pend_akhir[]"
                                                        class="form-control @error('pend_akhir') is-invalid @enderror"
                                                        id="">
                                                        <option value="">Pendidikan Akhir</option>
                                                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                                        <option value="Belum Tamat SD/Sederajat">Belum Tamat
                                                            SD/Sederajat</option>
                                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Jenis Pekerjaan</label>
                                                    <select name="jenis_pekerjaan[]"
                                                        class="form-control @error('jenis_pekerjaan') is-invalid @enderror"
                                                        id="">
                                                        <option value="">Jenis Pekerjaan</option>
                                                        <option value="PETANI/PEKEBUN" {{$item->jenis_pekerjaan == 'PETANI/PEKEBUN' ? 'selected' : ''}}>PETANI/PEKEBUN</option>
                                                        <option value="BELUM/TIDAK BEKERJA" {{$item->jenis_pekerjaan == 'BELUM/TIDAK BEKERJA' ? 'selected' : ''}}>BELUM/TIDAK BEKERJA</option>
                                                        <option value="BURUH TANI/PERKEBUNAN" {{$item->jenis_pekerjaan == 'BURUH TANI/PERKEBUNAN' ? 'selected' : ''}}>BURUH TANI/PERKEBUNAN
                                                        </option>
                                                        <option value="MENGURUS RUMAH TANGGA" {{$item->jenis_pekerjaan == 'MENGURUS RUMAH TANGGA' ? 'selected' : ''}}>MENGURUS RUMAH TANGGA
                                                        </option>
                                                        <option value="PELAJAR/MAHASISWA" {{$item->jenis_pekerjaan == 'PELAJAR/MAHASISWA' ? 'selected' : ''}}>PELAJAR/MAHASISWA</option>
                                                        <option value="WIRASWASTA" {{$item->jenis_pekerjaan == 'WIRASWASTA' ? 'selected' : ''}}>WIRASWASTA</option>
                                                        <option value="BURUH HARIAN LEPAS" {{$item->jenis_pekerjaan == '' ? 'selected' : ''}}>BURUH HARIAN LEPAS</option>
                                                        <option value="SOPIR" {{$item->jenis_pekerjaan == 'BURUH HARIAN LEPAS' ? 'selected' : ''}}>SOPIR</option>
                                                        <option value="KARYAWAN HONORER" {{$item->jenis_pekerjaan == 'KARYAWAN HONORER' ? 'selected' : ''}}>KARYAWAN HONORER</option>
                                                        <option value="BURUH NELAYAN/PERIKANAN" {{$item->jenis_pekerjaan == 'BURUH NELAYAN/PERIKANAN' ? 'selected' : ''}}>BURUH NELAYAN/PERIKANAN
                                                        </option>
                                                        <option value="PENSIUNAN" {{$item->jenis_pekerjaan == 'PENSIUNAN' ? 'selected' : ''}}>PENSIUNAN</option>
                                                        <option value="PERDAGANGAN" {{$item->jenis_pekerjaan == 'PERDAGANGAN' ? 'selected' : ''}}>PERDAGANGAN</option>
                                                        <option value="PERANGKAT DESA" {{$item->jenis_pekerjaan == 'PERANGKAT DESA' ? 'selected' : ''}}>PERANGKAT DESA</option>
                                                        <option value="PEGAWAI NEGERI SIPIL" {{$item->jenis_pekerjaan == 'PEGAWAI NEGERI SIPIL' ? 'selected' : ''}}>PEGAWAI NEGERI SIPIL
                                                        </option>
                                                        <option value="TNI/POLRI" {{$item->jenis_pekerjaan == 'TNI/POLRI' ? 'selected' : ''}}>TNI/POLRI</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="">Rentang Penghasilan</label>
                                                    <select name="rentang_penghasilan[]"
                                                        class="form-control @error('rentang_penghasilan') is-invalid @enderror"
                                                        id="">
                                                        <option value="">Rentang Penghasilan</option>
                                                        <option value="<500.000" {{$item->penghasilan == '<500.000' ? 'selected' : ''}}> kurang dari 500.000 </option>
                                                        <option value="500.000-1.000.000" {{$item->penghasilan == '500.000-1.000.000' ? 'selected' : ''}}>500.000-1.000.000</option>
                                                        <option value="1.000.0000-2.000.000" {{$item->penghasilan == '1.000.0000-2.000.000' ? 'selected' : ''}}>1.000.0000-2.000.000
                                                        </option>
                                                        <option value="2.000.000-3.000.000" {{$item->penghasilan == '2.000.000-3.000.000' ? 'selected' : ''}}>2.000.000-3.000.000</option>
                                                        <option value="3.000.000-4.000.000" {{$item->penghasilan == '3.000.000-4.000.000' ? 'selected' : ''}}>3.000.000-4.000.000</option>
                                                        <option value="4.000.000-5.000.000" {{$item->penghasilan == '4.000.000-5.000.000' ? 'selected' : ''}}>4.000.000-5.000.000</option>
                                                        <option value=">5.000.000" {{$item->penghasilan == '>5.000.000' ? 'selected' : ''}}>>5.000.000</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                               @endforeach
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
