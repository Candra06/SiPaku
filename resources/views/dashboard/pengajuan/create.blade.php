@extends('dashboard.templates.master-warga')

@section('content')

    <section class="mt-5" style="margin-top: 100px!important">
        <div class="container mt-5">

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">{{ $surat->surat }}</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ $surat->deskripsi }}</p>
                            <form action="/dashboard/pengajuan/warga/" method="POST">
                                @csrf
                                <input type="hidden" name="id_surat" value="{{ $id }}" readonly>
                                <div class="row">
                                    @foreach ($data as $item)
                                        <div class="col-lg-12 mb-3">
                                            <input type="hidden" name="id_form[]" value="{{ $item->id_form }}" readonly>
                                            <label for="">{{ $item->label }}</label>
                                            @if ($item->type == 'Single')
                                                <input type="text" name="value[]"
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    placeholder="{{ $item->label }}" required>
                                            @elseif ($item->type == 'Multi')
                                                <textarea name="value[] "
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    placeholder="{{ $item->label }}" required cols="3"
                                                    rows="2"></textarea>
                                            @elseif ($item->type == 'Date')
                                                <input type="date" name="value[]    "
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    placeholder="{{ $item->label }}" required>
                                            @endif
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    @endforeach

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
        </div>
    </section>



@endsection
