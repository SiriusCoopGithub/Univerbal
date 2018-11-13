<?php

namespace App\Http\Controllers\Admin;

use App\Mission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $mission = Mission::orderBy('id', 'asc')->get();
        return view('admin.missions.index')->withMissions($mission);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.missions.create');
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
        $mission = Mission::create([
          'name'      => $request->input('name'),
          'email'     => $request->input('email'),
          'active'    => $request->input('active'),
          'password'  => $request->input('password'),
        ]);

        $profilable = $mission->profilable()->create([
          'user_type'   => $request->input('user_type'),
          'last_name'   => $request->input('name'),
          'first_name'  => $request->input('first_name'),
          'gsm'         => $request->input('gsm'),
          'telephone'   => $request->input('telephone'),
          'email'       => $request->input('email'),
          'titre'       => $request->input('titre'),
          'genre'       => $request->input('genre'),
        ]);

        $adresse = $profilable->adresse()->create([
          'street_num'  => $request->input('street_num'),
          'box_num'     => $request->input('box_num'),
          'street_name' => $request->input('street_name'),
          'postal_code' => $request->input('postal_code'),
          'city_name'   => $request->input('city_name'),
          'country'   => 'Belgique',
        ]);

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
    public function update(Request $request, $id)
    {

      $mission = Mission::findOrFail($id)->update([
        'name'        => $request->input('name'),
        'email'       => $request->input('email'),
        'active'      => $request->input('active'),
        'password'    => $request->input('password'),
      ]);

      $profilable = $mission->profilable()->update([
        'user_type'   => $request->input('user_type'),
        'last_name'   => $request->input('name'),
        'first_name'  => $request->input('first_name'),
        'gsm'         => $request->input('gsm'),
        'telephone'   => $request->input('telephone'),
        'email'       => $request->input('email'),
        'titre'       => $request->input('titre'),
        'genre'       => $request->input('genre'),
      ]);

      $adresse = $profilable->adresse()->update([
        'street_num'  => $request->input('street_num'),
        'box_num'     => $request->input('box_num'),
        'street_name' => $request->input('street_name'),
        'postal_code' => $request->input('postal_code'),
        'city_name'   => $request->input('city_name'),
        'country'   => 'Belgique',
      ]);

      return view('admin.users.show', compact('Mission'));
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
      return redirect()->route('users.index');
    }

}
