<?php

namespace App\Http\Controllers\App;

use App\User;
use App\Langue;
use App\Mission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class MissionsAppController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $user = Auth::user();
    // $missions = $user->missions;
    $missions = Mission::with('langue')->orderBy('name', 'asc')->get();
    dd($missions);
    return view('app.missions.index', compact('missions'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $commanditaires = User::role('commanditaire')->get();
    $interpretes = User::role('interprete')->get();
    $langues = Langue::where('active', '=', '1')->get();

    return view('admin.missions.create', compact('commanditaires', 'interpretes', 'langues'));
  }

  /**
   * Store a newly created Mission in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateMissionRequest $request)
  {
    $hours = $request->input('hourstime');
    $date = $request->input('datetime');
    $time = $date . ' ' . $hours;
    $validedTime = Carbon::parse($time);

    $createdBy = Auth::user();
    $user = $request->input('users');
    $user = User::findorfail($user);
    $organisation = $user->organisations()->first();

    if ($request->input('genre') == 'na') {
      $sexe_interp = 'b';
    }
    else {
      $sexe_interp = $request->input('genre');
    }

    if($request->input('interprete_id') !== null) {
      $statuts = 'selected';
    }
    else {
      $statuts = 'active';
    }

    $facture_num = Carbon::now();

    $mission = Mission::create([
      'user_id'         => $user->id,
      'date'            => $validedTime,
      'objet'           => $request->input('objet'),
      'note_perso'      => $request->input('note_perso'),
      'note_interp'     => $request->input('note_interp'),
      'estimed_time'    => $request->input('estimed_time'),
      'sexe_interp'     => $sexe_interp,
      'facture_num'     => $facture_num,
      'statuts'         => $statuts,
      'organisation_id' => $organisation->id,
      'interprete_id'   => $request->input('interprete_id'),
      'created_by'      => $createdBy->id,
    ]);

    $langue1 = $request->input('langue1');
    $langue1 = $request->input('langue2');

    if (isset($langue1)) {
      $mission->langue()->sync($langue1);
    }
    if (isset($langue2)) {
      $mission->langue()->sync($langue2);
    }

    // dd($mission);

    return redirect()->route('missions.show', $mission->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $mission = Mission::with('langue', 'user')->findOrFail($id);
    return view('admin.missions.show', compact('mission'));
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
