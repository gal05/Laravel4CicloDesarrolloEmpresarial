<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
class AutosController extends Controller
{
 


 public function index()
 {
	$autos = Auto::all();
	$datos = array('autos' => $autos);
	return view('autos.index',$datos);
 }


 public function create()
 {
 	return view('autos.create');
 }

public function store(Request $request)
{
	$auto=new Auto;
	$auto->placa = $request->input('placa');
	$auto->color = $request->input('color');
	$auto->save();
	return redirect('/auto/mostrar');

}
public function edit($id)
{
	$auto=Auto::find($id);
	$datos=array(
			'auto'=>$auto);
	return view('autos.edit',$datos);
}
public function editado(Request $request)
{
	$id=$request->input('id');

	$auto= Auto::find($id);
	$auto->placa = $request->input('placa');
	$auto->color = $request->input('color');
	$auto->save();
	return redirect('/auto/mostrar');

}

public function delete($id)
{
	$auto=Auto::find($id);
	$auto->delete();
	return redirect('/auto/mostrar');
}


}
