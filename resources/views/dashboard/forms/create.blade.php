@extends('dashboard.templates.master')

@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Input Data Forms</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/surat/form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Name Form">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="label" value="{{old('label')}}" class="form-control @error('label') is-invalid @enderror" placeholder="Label Form">
                            @error('label')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <select name="type"  class="form-control @error('type') is-invalid @enderror" id="">
                                <option value="">Pilih Tipe</option>
                                <option value="Single" {{{old('type') == 'Single' ? 'selected' : ''}}}}>Single Line</option>
                                <option value="Multi" {{{old('type') == 'Multi' ? 'selected' : ''}}}}>Multi Line</option>
                                <option value="Date" {{{old('type') == 'Date' ? 'selected' : ''}}}}>Date</option>
                            </select>
                            
                            @error('type')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <div></div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection