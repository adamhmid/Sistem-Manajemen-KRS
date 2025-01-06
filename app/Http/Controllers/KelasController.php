<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KelasController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $kelas = Kelas::paginate(10);

    return view('kelas.index', compact('kelas'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $dosen = Dosen::pluck('nama', 'id');
    $mk = MataKuliah::pluck('nama_mk', 'id');

    return view('kelas.create', compact('dosen', 'mk'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'nama_kelas' => 'required|max:100|unique:kelas,nama_kelas',
      'dosen_id' => 'required',
      'mata_kuliah_id' => 'required'
    ]);

    Kelas::create($request->only([
      'nama_kelas',
      'dosen_id',
      'mata_kuliah_id'
    ]));

    return redirect()->route('kelas.index');
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
    $kelas = Kelas::findOrFail($id);
    $dosen = Dosen::pluck('nama', 'id');
    $mk = MataKuliah::pluck('nama_mk', 'id');

    return view('kelas.edit', compact('kelas', 'dosen', 'mk'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'nama_kelas' => 'required|max:100|unique:kelas,nama_kelas,' . $id,
      'dosen_id' => 'required',
      'mata_kuliah_id' => 'required'
    ]);

    Kelas::where('id', $id)->update($request->only([
      'nama_kelas',
      'dosen_id',
      'mata_kuliah_id'
    ]));

    return redirect()->route('kelas.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Kelas::destroy($id);

    return redirect()->route('kelas.index');
  }
}
