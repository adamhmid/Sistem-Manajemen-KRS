<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $dosen = Dosen::paginate(10);

    return view('dosen.index', compact('dosen'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dosen.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'nidn' => 'required|max:20|unique:dosens,nidn',
      'nama' => 'required|max:100',
      'email' => 'required|max:100|unique:dosens,email',
      'jenis_kelamin' => 'required|max:1',
    ]);

    Dosen::create($request->only([
      'nidn',
      'nama',
      'email',
      'jenis_kelamin',
    ]));

    return redirect()->route('dosen.index');
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
    $dosen = Dosen::findOrFail($id);

    return view('dosen.edit', compact('dosen'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'nidn' => 'required|max:20|unique:dosens,nidn,' . $id,
      'nama' => 'required|max:100',
      'email' => 'required|max:100|unique:dosens,email,' . $id,
      'jenis_kelamin' => 'required|max:1',
    ]);

    Dosen::where('id', $id)->update($request->only([
      'nidn',
      'nama',
      'email',
      'jenis_kelamin',
    ]));

    return redirect()->route('dosen.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Dosen::destroy($id);

    return redirect()->route('dosen.index');
  }
}
