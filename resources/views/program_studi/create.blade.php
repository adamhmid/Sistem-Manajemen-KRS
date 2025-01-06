@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Create Program Studi') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('program-studi.store') }}">
              @csrf
              <div class="row mb-3">
                <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama Program Studi') }}</label>
                <div class="col-md-6">
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <a href="{{ route('program-studi.index') }}" class="btn btn-secondary">Back</a>
                  <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
