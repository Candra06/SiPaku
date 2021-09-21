@extends('dashboard.templates.master')

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Format Surat</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/surat/format" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <select name="id_surat" class="form-control @error('id_surat') is-invalid @enderror" id="">
                                    <option value="">Pilih Jenis Surat</option>
                                    @foreach ($surat as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('type') == $item->id ? 'selected' : '' }}>{{ $item->surat }}</option>
                                    @endforeach
                                </select>

                                @error('id_surat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-12 mb-3" id="forms">
                                <select name="id_forms[]" class="form-control @error('id_forms') is-invalid @enderror"
                                    id="">
                                    <option value="">Pilih Form Input</option>
                                    @foreach ($forms as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('type') == $item->id ? 'selected' : '' }}>
                                            {{ $item->label . '(' . $item->name . ')' }}</option>
                                    @endforeach
                                </select>

                                @error('id_forms')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                                <div class="col-md-6 mb-3">
                                    <button id="remove" type="button" class="btn btn-block btn-danger"><span
                                            class="fas fa-minus"></span> </button>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <button id="add" type="button" class="btn btn-block btn-success"><span
                                            class="fas fa-plus"></span> </button>
                                </div>
                            
                            <div class="col-lg-12 d-flex justify-content-between" id="submit">
                                <div></div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">
        // $("#anggotakk:first #remove-anggota").hide();
        var length = $("#forms").length;
        if (length == 1) {
            $("#remove").hide();
        }
        $("#add").click(function() {
            var clone = $("#forms:first").clone();
            clone.find("input").val("");
            $("#forms").after(clone);
            length += 1;
            if (length == 1) {
                $("#remove").hide();
            } else {
                $("#remove").show();
            }
        });


        $("#remove").click(function() {
            $("#forms:last").remove();
            length -= 1;
            if (length == 1) {
                $("#remove").hide();
            } else {
                $("#remove").show();
            }
        });
    </script>

@endsection
