<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
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
        $tipo_estadia=$request->input('tipo_estadia');
        $cantidad=$request->input('cantidad');
        $dias=$request->input('dias');  
        

        if($tipo_estadia=="matrimonial"){
            if ($cantidad>4) {
                echo "Error cantidad de personas excedida!!";
            }else{

                if ($dias>=1 || $dias<=5) {
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias"." es ".$dias*70 ;
                }else{
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias es $".$dias*50;
                }}
            }else if($tipo_estadia=="doble"){

                if ($dias>=1 || $dias<=5) {
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias"." es ".$dias*80 ;
                }else{
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias es $".$dias*60;
                }
            }if($tipo_estadia=="simple"){

                if ($dias>=1 || $dias<=5) {
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias"." es ".$dias*70 ;
                }else{
                    echo "El tipo de servicio ".$tipo_estadia." para ".$cantidad." de personas, por ".$dias." dias es $".$dias*100;
                }
            }

        }
    }
