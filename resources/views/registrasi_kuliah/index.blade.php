@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Registrasi Kuliah') }}
            <a href="{{ route('registrasi-kuliah.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Mahasiswa</th>
                  <th>Kelas</th>
                  <th>Semester</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rk as $r)
                  <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->mahasiswa->nama }}</td>
                    <td>{{ $r->kelas->nama_kelas }}</td>
                    <td>{{ $r->semester }}</td>
                    <td>{{ $r->status }}</td>
                    <td class="text-end">
                      <a href="{{ route('registrasi-kuliah.edit', $r->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('registrasi-kuliah.destroy', $r->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $rk->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
