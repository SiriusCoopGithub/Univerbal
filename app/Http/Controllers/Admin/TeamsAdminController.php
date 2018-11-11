<?php

namespace App\Http\Controllers\admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $teams = Team::orderBy('id', 'asc')->get();
      return view('admin.acl.teams.index')->withTeams($teams);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $teams = Team::all();
      return view('admin.acl.teams.index')->withTeams($teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $teams = Team::create([
        'name'      => request('name'),
        'email'     => request('email'),
        'active'    => request('active'),
        'password'  => request('password'),
      ]);

      return view('admin.acl.teams.index', compact('teams'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $teams = Team::findOrFail($id);
      return view('admin.acl.teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
