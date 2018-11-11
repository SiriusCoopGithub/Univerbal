<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Redirect to the dashboard
     */
    public function index() {


      return redirect()->route('admin.dashboard');
    }

    /**
     * View the dashboard
     */
    public function dashboard() {
      return view('admin.index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = User::with(['roles', 'profile', 'organisation'])->get();
        // $users = User::orderBy('id', 'asc')->get();
        return view('admin.users.index')->withUsers($users);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();

      return view('admin.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

        // dd($request);
        // $user = User::create($request->all());

        $user = User::create([
          'name'      => request('name'),
          'email'     => request('email'),
          'active'    => request('active'),
          'password'  => request('password'),
        ]);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // dd(User::where('id', $id));
      $user = User::findOrFail($id);
      // dd($user);
      return view('admin.users.show', ['user' => $user]);
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
