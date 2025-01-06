@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Mahasiswa') }}
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Program Studi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswa as $m)
                  <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->tempat_lahir }}</td>
                    <td>{{ $m->tanggal_lahir }}</td>
                    <td>{{ $m->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $m->programStudi->nama }}</td>
                    <td class="text-end">
                      <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $mahasiswa->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
