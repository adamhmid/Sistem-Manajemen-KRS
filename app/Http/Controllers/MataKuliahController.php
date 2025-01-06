<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $mk = MataKuliah::paginate(10);

    return view('mata_kuliah.index', compact('mk'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('mata_kuliah.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'kode_mk' => 'required|max:20|unique:mata_kuliahs,kode_mk',
      'nama_mk' => 'required|max:100',
      'sks' => 'required|max:2',
    ]);

    MataKuliah::create($request->only([
      'kode_mk',
      'nama_mk',
      'sks',
    ]));

    return redirect()->route('mata-kuliah.index');
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
    $mk = MataKuliah::findOrFail($id);

    return view('mata_kuliah.edit', compact('mk'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'kode_mk' => 'required|max:20|unique:mata_kuliahs,kode_mk,' . $id,
      'nama_mk' => 'required|max:100',
      'sks' => 'required|max:2',
    ]);

    MataKuliah::where('id', $id)->update($request->only([
      'kode_mk',
      'nama_mk',
      'sks',
    ]));

    return redirect()->route('mata-kuliah.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    MataKuliah::destroy($id);

    return redirect()->route('mata-kuliah.index');
  }
}
