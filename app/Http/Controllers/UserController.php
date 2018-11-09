<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
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
      $roles = Role::all();

      return view('admin.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

        // validate incoming request

        // $validator = Validator::make($request->all(), [
        // 'email' => 'required|email|unique:users',
        // 'name' => 'required|string|max:50',
        // 'type' => 'bail|required',
        // 'password' => 'required'
        // ]);

        // if ($validator->fails()) {
        //   Session::flash('error', $validator->messages()->first());
        //   return redirect()->back()->withInput();
        // }

        $user = User::create([
          'name'      => request('name'),
          'email'     => request('email'),
          'type'      => request('usertype'),
          'password'  => Hash::make(request('password')),
        ]);

        return redirect()->back()->withInput();
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
