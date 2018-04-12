<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaseosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function vender(Request $request)
    {
        $cantidad=$request->input('cantidad');
        $producto=$request->input('producto');
        $pago=$request->input('pago');  
        $split=explode(" ",$producto,3);
        $nombre=$split[0];
        $precio=$split[1];
        $stock=$split[2];

        $precio=floatval($precio);
        $costo=$cantidad*$precio;
        $vuelto=$pago-$costo;
       echo "El precio por ".$cantidad." de ".$nombre." a S/".$precio." cada uno es ".$costo." y su buelto es ".$vuelto;


    }

}
