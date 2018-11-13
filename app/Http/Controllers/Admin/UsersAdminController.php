<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
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
        $users = User::orderBy('id', 'asc')->get();
        return view('admin.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $user = User::create([
          'name'      => $request->input('name'),
          'email'     => $request->input('email'),
          'active'    => $request->input('active'),
          'password'  => $request->input('password'),
        ]);

        $profilable = $user->profilable()->create([
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

        $role = $request->input('user_type');
        //Checking if a role was selected
        if (isset($role)) {

          $role_r = Role::where('name', '=', $role)->firstOrFail();
          $user->assignRole($role_r); //Assigning role to user
        }


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
      return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
      return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $id)
    {

      $user = User::findOrFail($id)->update([
        'name'        => $request->input('name'),
        'email'       => $request->input('email'),
        'active'      => $request->input('active'),
        'password'    => $request->input('password'),
      ]);

      $profilable = $user->profilable()->update([
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

      $role = $request->input('user_type');
      //Checking if a role was selected
      if (isset($role)) {

        $role_r = Role::where('name', '=', $role)->firstOrFail();
        $user->assignRole($role_r); //Assigning role to user
      }

      return view('admin.users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::where('id', $id)->delete();
      return redirect()->route('users.index');
    }

}
