<?php

namespace App\Http\Controllers\AppUnvb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppUnvbController extends Controller
{


  /**
   * Make all the pages pass trough auth
   *
   * @return void
   */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }
  public function index(){
    return view('pages.app.index');
  }

  public function login(){
      return view('pages.app.login');
  }

  public function client(){
    return view('pages.app.client');
  }
  public function clientProfile(){
    return view('pages.app.client-profile');
  }
  public function clientOptions(){
    return view('pages.app.client-options');
  }



  public function interprete(){
    return view('pages.app.interprete');
  }
  public function mdp(){
    return view('pages.app.mdp');
  }
  public function vuejs(){
    return view('pages.app.vuejs');
  }


}
