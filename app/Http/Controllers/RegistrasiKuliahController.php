<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\RegistrasiKuliah;
use Illuminate\Http\Request;

class RegistrasiKuliahController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $rk = RegistrasiKuliah::paginate(10);

    return view('registrasi_kuliah.index', compact('rk'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $mahasiswa = Mahasiswa::pluck('nama', 'id');
    $kelas = Kelas::pluck('nama_kelas', 'id');

    return view('registrasi_kuliah.create', compact('mahasiswa', 'kelas'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'semester' => 'required|max:2',
      'status' => 'required',
      'mahasiswa_id' => 'required',
      'kelas_id' => 'required',
    ]);

    RegistrasiKuliah::create($request->only([
      'semester',
      'status',
      'mahasiswa_id',
      'kelas_id',
    ]));

    return redirect()->route('registrasi-kuliah.index');
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
    $rk = RegistrasiKuliah::findOrFail($id);
    $mahasiswa = Mahasiswa::pluck('nama', 'id');
    $kelas = Kelas::pluck('nama_kelas', 'id');

    return view('registrasi_kuliah.edit', compact('rk', 'mahasiswa', 'kelas'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'semester' => 'required|max:2',
      'status' => 'required',
      'mahasiswa_id' => 'required',
      'kelas_id' => 'required',
    ]);

    RegistrasiKuliah::where('id', $id)->update($request->only([
      'semester',
      'status',
      'mahasiswa_id',
      'kelas_id',
    ]));

    return redirect()->route('registrasi-kuliah.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    RegistrasiKuliah::destroy($id);

    return redirect()->route('registrasi-kuliah.index');
  }
}
