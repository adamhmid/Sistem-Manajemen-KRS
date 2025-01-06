@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit Mata Kuliah') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('mata-kuliah.update', $mk->id) }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="kode_mk" class="col-md-4 col-form-label text-md-end">{{ __('Kode MK') }}</label>
                <div class="col-md-6">
                  <input id="kode_mk" type="text" class="form-control @error('kode_mk') is-invalid @enderror" name="kode_mk"
                    value="{{ old('kode_mk') ?? $mk->kode_mk }}" required autocomplete="kode_mk" autofocus>
                  @error('kode_mk')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="nama_mk" class="col-md-4 col-form-label text-md-end">{{ __('Nama MK') }}</label>
                <div class="col-md-6">
                  <input id="nama_mk" type="text" class="form-control @error('nama_mk') is-invalid @enderror" name="nama_mk"
                    value="{{ old('nama_mk') ?? $mk->nama_mk }}" required autocomplete="nama_mk" autofocus>
                  @error('nama_mk')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="sks" class="col-md-4 col-form-label text-md-end">{{ __('SKS') }}</label>
                <div class="col-md-6">
                  <input id="sks" type="text" class="form-control @error('sks') is-invalid @enderror" name="sks"
                    value="{{ old('sks') ?? $mk->sks }}" required autocomplete="sks" autofocus>
                  @error('sks')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">Back</a>
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
