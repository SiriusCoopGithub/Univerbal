<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function valideform(){
      return view('admin.valideform');
    }
}
