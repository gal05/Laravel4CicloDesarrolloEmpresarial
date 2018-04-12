<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CineController extends Controller
{
    public function index()
    {
    	return  view("cine");
    }

    public function vender(Request $request)
    {
    	$e=$request->input('edad');
    	$c=$request->input('est');

    	if ($e<12||$c=='S') {
    		echo "Paga 3 soles";
    	}else {
    		echo "Paga 10 soles";
    	}
    }
}






