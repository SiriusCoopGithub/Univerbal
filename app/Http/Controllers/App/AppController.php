<?php

namespace App\Http\Controllers\App;

use App\User;
use App\Langue;
use App\Mission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
      $user = Auth::user();
      $langues = Langue::where('active', '=', '1')->get()->toJson();
      $roles = $user->getRoleNames()->toJson();
      $missions = $user->missions->toJson();
      $profile = $user->profilable->first();
      $organisation = $user->organisations->first();
      $adresse = $profile->adresse->first()->toJson();
      $organisationProfile = $organisation->profilable->first()->toJson();
      $organisation = $organisation->toJson();
      $profile = $profile->toJson();
      // dd($missions);
      return view('app.index', compact('user', 'langues', 'roles', 'missions', 'profile', 'organisation', 'adresse', 'organisationProfile'));
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
