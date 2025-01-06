<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $mahasiswa = Mahasiswa::paginate(10);

    return view('mahasiswa.index', compact('mahasiswa'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $prodi = ProgramStudi::pluck('nama', 'id');

    return view('mahasiswa.create', compact('prodi'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'nim' => 'required|max:15|unique:mahasiswas,nim',
      'nama' => 'required|max:100',
      'tempat_lahir' => 'required|max:50',
      'tanggal_lahir' => 'required',
      'jenis_kelamin' => 'required|max:1',
      'program_studi_id' => 'required'
    ]);

    Mahasiswa::create($request->only([
      'nim',
      'nama',
      'tempat_lahir',
      'tanggal_lahir',
      'jenis_kelamin',
      'program_studi_id'
    ]));

    return redirect()->route('mahasiswa.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $mahasiswa = Mahasiswa::with('programStudi')->findOrFail($id);
    $prodi = ProgramStudi::pluck('nama', 'id');

    return view('mahasiswa.edit', compact('mahasiswa', 'prodi'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'nim' => 'required|max:15|unique:mahasiswas,nim,' . $id,
      'nama' => 'required|max:100',
      'tempat_lahir' => 'required|max:50',
      'tanggal_lahir' => 'required',
      'jenis_kelamin' => 'required|max:1',
      'program_studi_id' => 'required'
    ]);

    Mahasiswa::where('id', $id)->update($request->only([
      'nim',
      'nama',
      'tempat_lahir',
      'tanggal_lahir',
      'jenis_kelamin',
      'program_studi_id'
    ]));

    return redirect()->route('mahasiswa.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Mahasiswa::destroy($id);

    return redirect()->route('mahasiswa.index');
  }
}
