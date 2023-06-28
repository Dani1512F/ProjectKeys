<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Sos, User, Type};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class HomePage extends Controller
{
  public function index()
  {

    $user =  Auth::user();
    $roleifexist = DB::table('model_has_roles')->where('model_id', $user->id)->first();
    if(!$roleifexist){

      DB::table('model_has_roles')->insert([
        'role_id' => 2,
        'model_type' => 'App\Models\User',
        'model_id' => $user->id
      ]);
    }


    $n_sos = Sos::where('active', true)->count();
    $n_user = User::count();
    $n_types = Type::where('active', true)->count();
    return view('content.pages.pages-home', ['n_sos'=>$n_sos, 'n_types'=>$n_types, 'n_user'=>$n_user]);
  }
}
