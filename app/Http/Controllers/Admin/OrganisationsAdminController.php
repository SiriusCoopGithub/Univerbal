<?php

namespace App\Http\Controllers\Admin;

use App\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRoleRequest;

class OrganisationsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $organisations = Organisation::orderBy('id', 'asc')->get();
      return view('admin.organisations.index')->withOrganisations($organisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.organisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $organisation = Organisation::create([
          'name'        => $request->input('name'),
          'contact_id'  => $request->input('email'),
        ]);

        $profilable = $organisation->profilable()->create([
          'user_type'         => $request->input('user_type'),
          'last_name'         => $request->input('name'),
          'gsm'               => $request->input('gsm'),
          'telephone'         => $request->input('telephone'),
          'email'             => $request->input('email'),
          'organisation_abbr' => $request->input('organisation_abbr'),
        ]);

        $adresse = $profilable->adresse()->create([
          'street_num'  => $request->input('street_num'),
          'box_num'     => $request->input('box_num'),
          'street_name' => $request->input('street_name'),
          'postal_code' => $request->input('postal_code'),
          'city_name'   => $request->input('city_name'),
          'country'   => 'Belgique',
        ]);

        return view('admin.organisations.show', compact('organisation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $organisation = Organisation::findOrFail($id);
      return view('admin.organisations.show', compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $organisation = Organisation::findOrFail($id);
      return view('admin.organisations.edit', compact('organisation'));
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
      $organisation = Organisation::findOrFail($id)->update([
        'name'              => $request->input('name'),
        'contact_id'        => $request->input('email'),
      ]);

      $profilable = $organisation->profilable()->update([
        'user_type'         => $request->input('user_type'),
        'last_name'         => $request->input('name'),
        'gsm'               => $request->input('gsm'),
        'telephone'         => $request->input('telephone'),
        'email'             => $request->input('email'),
        'organisation_abbr' => $request->input('organisation_abbr'),
      ]);

      $adresse = $profilable->adresse()->update([
        'street_num'        => $request->input('street_num'),
        'box_num'           => $request->input('box_num'),
        'street_name'       => $request->input('street_name'),
        'postal_code'       => $request->input('postal_code'),
        'city_name'         => $request->input('city_name'),
        'country'   => 'Belgique',
      ]);

      return view('admin.organisations.show', compact('organisation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $organisation = Organisation::where('id', $id)->delete();
      return redirect()->route('organisations.index');
    }
}
