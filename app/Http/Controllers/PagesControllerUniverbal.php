<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerUniverbal extends Controller
{
  public function index(){
    return view('pages.index');
  }
  public function login(){
    return view('pages.login');
  }
  public function client(){
    return view('pages.client');
  }
  public function interprete(){
    return view('pages.interprete');
  }
  public function mdp(){
    return view('pages.mdp');
  }
  public function nath(){
    return view('pages.nath');
  }
}
