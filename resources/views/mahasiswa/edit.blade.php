@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit Mahasiswa') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="nim" class="col-md-4 col-form-label text-md-end">{{ __('NIM') }}</label>
                <div class="col-md-6">
                  <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
                    value="{{ old('nim') ?? $mahasiswa->nim }}" required autocomplete="nim" autofocus>
                  @error('nim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
                <div class="col-md-6">
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') ?? $mahasiswa->nama }}" required autocomplete="nama" autofocus>
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="tempat_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>
                <div class="col-md-6">
                  <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                    value="{{ old('tempat_lahir') ?? $mahasiswa->tempat_lahir }}" required autocomplete="tempat_lahir" autofocus>
                  @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>
                <div class="col-md-6">
                  <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir') ?? $mahasiswa->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>
                  @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                <div class="col-md-6">
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                    @if ($mahasiswa->jenis_kelamin)
                      <option value="{{ $mahasiswa->jenis_kelamin }}">{{ $mahasiswa->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</option>
                    @endif
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="program_studi_id" class="col-md-4 col-form-label text-md-end">{{ __('Program Studi') }}</label>
                <div class="col-md-6">
                  <select name="program_studi_id" id="program_studi_id" class="form-control @error('program_studi_id') is-invalid @enderror">
                    @if ($mahasiswa->programStudi)
                      <option value="{{ $mahasiswa->programStudi->id }}">{{ $mahasiswa->programStudi->nama }}</option>
                    @endif
                    <option value="">--Pilih Program Studi--</option>
                    @foreach ($prodi as $id => $nama)
                      <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                  </select>
                  @error('program_studi_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back</a>
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
