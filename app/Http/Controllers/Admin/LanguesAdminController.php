<?php

namespace App\Http\Controllers\Admin;

use App\Langue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLangueRequest;

class LanguesAdminController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $langues = Langue::orderBy('id', 'asc')->get();
    return view('admin.langues.index')->withLangues($langues);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.langues.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateLangueRequest $request)
  {
    $langue = Langue::create([
      'name' => $request->input('name'),
      'abbr' => $request->input('abbr'),
      'dialect'     => $request->input('dialect'),
      'country'     => $request->input('country'),
      'description' => $request->input('description'),
      'active'      => $request->input('active'),
    ]);

    return view('admin.langues.show', compact('langue'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $langue = Langue::findOrFail($id);
    return view('admin.langues.show', compact('langue'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $langue = Langue::findOrFail($id);
    return view('admin.langues.edit', compact('langue'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function actived(Langue $langue)
  {
    // dd($request);
    $langue->update([
      'active'      => request()->has('active'),
    ]);
    return back();
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(CreateLangueRequest $request, $id)
  {
    $langue = Langue::findOrFail($id)->update([
      'name' => $request->input('name'),
      'abbr' => $request->input('abbr'),
      'dialect'     => $request->input('dialect'),
      'country'     => $request->input('country'),
      'description' => $request->input('description'),
      'active'      => $request->input('active'),
    ]);

    return redirect()->route('langues.show', $id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $langue = Langue::where('id', $id)->delete();

    return redirect()->route('langues.index');
  }
}
