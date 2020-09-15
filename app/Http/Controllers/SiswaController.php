<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        return view('belajar');
    }

   public function index()
   {
   	$data['siswa'] = \DB::table('siswa')->get();

   	return view('belajar', $data);
   }

   public function create()
   {
   	
   	return view('siswa.form');
   }
    public function post(Request $request) {
    $input = $request->all();
    unset($input['_token']);
    $status = \DB::table('siswa')->insert($input);

    if($status) {
      return redirect('/siswa')->with('success', 'Data successfully added !');
    } else {
      return redirect('/siswa/create')->with('error', 'Error add data to database !');
    }
  }
  public function edit(Request $request, $id){
    $data['siswa'] = \DB::table('siswa')->find($id);
    return view('siswa.form', $data);
  }

  public function update(Request $request, $id) {

    $input = $request->all();
    unset($input['_token']);
    unset($input['_method']);
    $status = \DB::table('siswa')->where('id', $id)->update($input);

    if($status) {
      return redirect('/siswa')->with('success', 'Data successfully changed !');
    } else {
      return redirect('/siswa/create')->with('error', 'Error change data to database !');
    } 
  }

  public function destroy(Request $request, $id) {
    $status = \DB::table('siswa')->where('id', $id)->delete();

    if($status) {
      return redirect('/siswa')->with('success', 'Data successfully deleted');
    } else {
      return redirect('/siswa/create')->with('error', 'Data failed deleted.. please try again : :(');
    }
  }
}
