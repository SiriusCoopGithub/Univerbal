<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return redirect()->route('app.missions');
    }

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function missions()
    {
        return view('app.missions');
    }

    /**
     * Show the application user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('app.profile');
    }

    /**
     * Show the application user options.
     *
     * @return \Illuminate\Http\Response
     */
    public function options()
    {
        return view('app.options');
    }

}
