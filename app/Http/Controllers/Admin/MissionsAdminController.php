<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Langue;
use App\Mission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateMissonRequest;

class MissionsAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Mission::with('langues')->orderBy('id', 'asc')->get();
        return view('admin.missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $commanditaire = User::role('commanditaire')->get();
      $interprete = User::role('interprete')->get();
      $langues = Langue::get();

      return view('admin.missions.create', compact('commanditaire', 'interprete', 'langues'));
    }

    /**
     * Store a newly created Mission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMissonRequest $request)
    {
      // dd($request);
      $createdBy = Auth::user();

      $userName = $request->input('name');

      $user = User::where('name', '=', $userName )->first();
      // $user = $request->input('user_id');

      $mission = Mission::create([
        'date'            => $request->input('date'),
        'objet'           => $request->input('email'),
        'note_perso'      => $request->input('note_perso'),
        'note_interp'     => $request->input('note_interp'),
        'estimed_time'    => $request->input('estimed_time'),
        'sexe_interp'     => $request->input('sexe_interp'),
        'facture_num'     => $request->input('facture_num'),
        'statut'          => $request->input('statut'),
        'organisation_id' => $request->input('organisation_id'),
        'interprete_id'   => $request->input('interprete_id'),
        'created_by'      => $createdBy,
      ]);

      $user->mission()->associate($mission);

      $user->save();



        return view('admin.users.show', compact('Mission'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $mission = Mission::findOrFail($id);
      return view('admin.users.show', compact('Mission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $mission = Mission::findOrFail($id);
      return view('admin.users.edit', compact('Mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMissonRequest $request, $id)
    {

      $mission = Mission::findOrFail($id)->update([
        'date'            => $request->input('date'),
        'objet'           => $request->input('email'),
        'note_perso'      => $request->input('note_perso'),
        'note_interp'     => $request->input('note_interp'),
        'estimed_time'    => $request->input('estimed_time'),
        'sexe_interp'     => $request->input('sexe_interp'),
        'facture_num'     => $request->input('facture_num'),
        'statut'          => $request->input('statut'),
        'organisation_id' => $request->input('organisation_id'),
        'interprete_id'   => $request->input('interprete_id'),
      ]);

      return view('admin.mission.show', compact('Mission'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mission = Mission::where('id', $id)->delete();
      return redirect()->route('mission.index');
    }

}
