@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Mata Kuliah') }}
            <a href="{{ route('mata-kuliah.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th>SKS</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mk as $m)
                  <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->kode_mk }}</td>
                    <td>{{ $m->nama_mk }}</td>
                    <td>{{ $m->sks }}</td>
                    <td class="text-end">
                      <a href="{{ route('mata-kuliah.edit', $m->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('mata-kuliah.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $mk->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
