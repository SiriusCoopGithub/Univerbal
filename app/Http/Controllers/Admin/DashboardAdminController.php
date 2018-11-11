<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
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
