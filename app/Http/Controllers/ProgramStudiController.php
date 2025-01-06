<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $prodi = ProgramStudi::paginate(10);
    return view('program_studi.index', compact('prodi'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('program_studi.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required|max:100'
    ]);

    ProgramStudi::create($request->only(['nama']));

    return redirect()->route('program-studi.index');
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
    $prodi = ProgramStudi::findOrFail($id);

    return view('program_studi.edit', compact('prodi'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'nama' => 'required|max:100'
    ]);

    ProgramStudi::where('id', $id)->update($request->only(['nama']));

    return redirect()->route('program-studi.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    ProgramStudi::destroy($id);

    return redirect()->route('program-studi.index');
  }
}
