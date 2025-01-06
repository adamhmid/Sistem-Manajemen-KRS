@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit Kelas') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('kelas.update', $kelas->id) }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="nama_kelas" class="col-md-4 col-form-label text-md-end">{{ __('Nama Kelas') }}</label>
                <div class="col-md-6">
                  <input id="nama_kelas" type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas"
                    value="{{ old('nama_kelas') ?? $kelas->nama_kelas }}" required autocomplete="nama_kelas" autofocus>
                  @error('nama_kelas')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="dosen_id" class="col-md-4 col-form-label text-md-end">{{ __('Dosen') }}</label>
                <div class="col-md-6">
                  <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    @if ($kelas->dosen_id)
                      <option value="{{ $kelas->dosen_id }}">{{ $kelas->dosen->nama }}</option>
                    @endif
                    <option value="">--Pilih Dosen--</option>
                    @foreach ($dosen as $id => $nama)
                      <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                  </select>
                  @error('dosen_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="mata_kuliah_id" class="col-md-4 col-form-label text-md-end">{{ __('Mata Kuliah') }}</label>
                <div class="col-md-6">
                  <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control @error('mata_kuliah_id') is-invalid @enderror">
                    @if ($kelas->mata_kuliah_id)
                      <option value="{{ $kelas->mata_kuliah_id }}">{{ $kelas->mataKuliah->nama_mk }}</option>
                    @endif
                    <option value="">--Pilih Mata Kuliah--</option>
                    @foreach ($mk as $id => $nama)
                      <option value="{{ $id }}">{{ $nama }}</option>
                    @endforeach
                  </select>
                  @error('mata_kuliah_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Back</a>
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
