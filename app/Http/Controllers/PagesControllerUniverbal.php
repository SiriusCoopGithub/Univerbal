<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerUniverbal extends Controller
{
  public function index(){
    return view('univerbal-pages.index');
  }
  public function login(){
    return view('univerbal-pages.login');
  }
  public function client(){
    return view('univerbal-pages.client');
  }
  public function interprete(){
    return view('univerbal-pages.interprete');
  }
  public function mdp(){
    return view('univerbal-pages.mdp');
  }
}
