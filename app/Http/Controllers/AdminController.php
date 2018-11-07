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


}
