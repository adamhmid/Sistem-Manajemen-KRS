@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Dosen') }}
            <a href="{{ route('dosen.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dosen as $m)
                  <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nidn }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->email }}</td>
                    <td>{{ $m->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td class="text-end">
                      <a href="{{ route('dosen.edit', $m->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('dosen.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $dosen->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
