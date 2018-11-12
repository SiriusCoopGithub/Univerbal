<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

class UsersAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = User::where('active', 1)->get();
        return view('admin.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $roles = Role::all();
      // return view('admin.users.create')->withRoles($roles);
      return view('admin.users.create');
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



        $profilable = $user->profilable()->create([
          'user_type'   => request('user_type'),
          'last_name'   => request('name'),
          'first_name'  => request('first_name'),
          'gsm'         => request('gsm'),
          'telephone'   => request('telephone'),
          'email'       => request('email'),
          'titre'       => request('titre'),
          'genre'       => request('genre'),
        ]);

        $adresse = $profilable->adresse()->create([
          'street_num'  => request('street_num'),
          'box_num'     => request('box_num'),
          'street_name' => request('street_name'),
          'postal_code' => request('postal_code'),
          'city_name'   => request('city_name'),
          'country'   => 'Belgique',
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

      $user = User::findOrFail($id);
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
