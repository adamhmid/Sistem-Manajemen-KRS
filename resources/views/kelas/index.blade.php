@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Kelas') }}
            <a href="{{ route('kelas.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Kelas</th>
                  <th>Dosen</th>
                  <th>Mata Kuliah</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kelas as $k)
                  <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->dosen->nama }}</td>
                    <td>{{ $k->mataKuliah->nama_mk }}</td>
                    <td class="text-end">
                      <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $kelas->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
