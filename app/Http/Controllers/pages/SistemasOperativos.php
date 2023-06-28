<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sos;
use Illuminate\Support\Facades\Hash;

class SistemasOperativos extends Controller
{
  public function index()
  {
    $sos = Sos::all();
    return view('content.pages.sos', ['sos'=>$sos]);
  }
  public function create()
  {
    return view('content.pages.sos-create');
  }
public function store(Request $request)
  {
    $validator = $request->validate([
      'name' => 'required',
    ]);
    $sos = new Sos();
    $sos->name = $request->name;
    $sos->description = $request->description;
    $sos->version = $request->version;
    $sos->save();
    return redirect()->route('pages-sos');
  }
public function show($sos_id){
    $sos = Sos::find($sos_id);
    return view('content.pages.sos-show', ['sos'=>$sos]);
  }
public function update(Request $request){
    $sos = Sos::find($request->sos_id);
    $sos->name = $request->name;
    $sos->description = $request->description;
    $sos->version = $request->version;
    $sos->save();
    return redirect()->route('pages-sos');
    //dd('Hola!!');

  }
public function destroy($sos_id){
    $sos = Sos::find($sos_id);
    $sos->delete();
    return redirect()->route('pages-sos');
  }
public function switch($sos_id){
    $sos = Sos::find($sos_id);
    $sos->active = !$sos->active;
    $sos->save();
    return redirect()->route('pages-sos');
  }
}