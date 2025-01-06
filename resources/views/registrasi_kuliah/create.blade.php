@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Create Registrasi Kuliah') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('registrasi-kuliah.store') }}">
              @csrf
              <div class="row mb-3">
                <label for="mahasiswa_id" class="col-md-4 col-form-label text-md-end">{{ __('Mahasiswa') }}</label>
                <div class="col-md-6">
                  <select name="mahasiswa_id" id="mahasiswa_id" class="form-control @error('mahasiswa_id') is-invalid @enderror">
                    <option value="">--Pilih Mahasiswa--</option>
                    @foreach ($mahasiswa as $id => $nama)
                      <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                  </select>
                  @error('mahasiswa_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="kelas_id" class="col-md-4 col-form-label text-md-end">{{ __('Kelas') }}</label>
                <div class="col-md-6">
                  <select name="kelas_id" id="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                    <option value="">--Pilih Kelas--</option>
                    @foreach ($kelas as $id => $nama)
                      <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                  </select>
                  @error('kelas_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="semester" class="col-md-4 col-form-label text-md-end">{{ __('Semester') }}</label>
                <div class="col-md-6">
                  <input id="semester" type="text" class="form-control @error('semester') is-invalid @enderror" name="semester"
                    value="{{ old('semester') }}" required autocomplete="semester" autofocus>
                  @error('semester')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                <div class="col-md-6">
                  <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="">--Pilih Status--</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Non-Aktif">Non-Aktif</option>
                  </select>
                  @error('status')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <a href="{{ route('registrasi-kuliah.index') }}" class="btn btn-secondary">Back</a>
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
