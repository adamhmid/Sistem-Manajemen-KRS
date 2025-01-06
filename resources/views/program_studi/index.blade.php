@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            {{ __('Program Studi') }}
            <a href="{{ route('program-studi.create') }}" class="btn btn-success ml-auto">Create</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nama</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($prodi as $p)
                  <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td class="text-end">
                      <a href="{{ route('program-studi.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                      <form action="{{ route('program-studi.destroy', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $prodi->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
