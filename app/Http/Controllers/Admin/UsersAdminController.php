<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Adresse;
use App\Profile;
use App\Organisation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
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
      $roles = Role::where('name', 'NOT LIKE', '%'.'Admin')->get();
      return view('admin.users.create', compact('roles'));
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

        $profile = $user->profilable()->create([
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

        $roles = $request->input('roles');
        // dd($roles);
        if (isset($roles)) {
          foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            $user->assignRole($role_r); //Assigning role to user
            }
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
      $roles = Role::get();
      return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::with(['profilable', 'roles' => function ($query) {
        $query->where('name', 'NOT LIKE', '%'.'Admin')->get();
      }])->findOrFail($id);
      // $user = User::with(['profilable', 'roles'])->findOrFail($id);
      $adresse = Adresse::where('id', '=', $user['profilable'][0]->id )->first();
      // dd($adresse);
      // $user = User::with(['profiles', 'adresses', ['roles' => function ($query) {
      //   $query->where('name', 'NOT LIKE', '%'.'Admin')->get();
      // }]])->findOrFail($id);

      // dd($user);
      // $roles = Role::where('name', 'NOT LIKE', '%'.'Admin')->get();
      $allRoles = Role::get();
      return view('admin.users.edit', compact('user', 'allRoles', 'adresse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
      // dd($request);
      $user = User::findOrFail($id);
      $user->update($request->all());

      // dd($user);
      // if ($request->has('password')) $user->update(['password'  => $request->input('password')]);

      $user->profilable()->update($request->all());
      $profile->adresse()->update($request->all());

      $roles = $request->input('roles');

      if (isset($roles)) {
        $user->roles()->sync($roles);
      }
      else {
        $user->roles()->detach();
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
