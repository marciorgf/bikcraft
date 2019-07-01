<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Client;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addressClient($t01_idClient)
    {
        $address =  Address::where('t01_client', '=', $t01_idClient )
                                   ->get();
        return $address;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm =[
            't03_address' => $request->t03_address,
            't01_idClient' => $request->t01_idClient,
            't03_addon' => $request->t03_addon,
            't03_neighborhood' => $request->t03_neighborhood,
            't03_city' => $request->t03_city,
            't03_zipCode' => $request->t03_zipCode,
            't03_state' => $request->t03_state
        ];

        $insert = Address::create($dataForm);
        if ($insert){
            $address =  Address::where('t01_idClient', '=', $request->t01_idClient )
                        ->get();
            return $address;
            }else{
            $message  = "Não foi possível incluir endereço, entre em contato com SAC";
            return json_encode($message);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($t03_idAddress)
    {
        $address= Address::find($t03_idAddress);
        return $address;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t03_idAddress)
    {
        $address = Address::find($t03_idAddress);
        $dataForm =[
            't03_address' => $request->t03_address,
            't03_addon' => $request->t03_addon,
            't03_neighborhood' => $request->t03_neighborhood,
            't03_city' => $request->t03_city,
            't03_zipCode' => $request->t03_zipCode,
            't03_state' => $request->t03_state
        ];
        $update = $address->update($dataForm);
        if($update){
            $address = Address::find($t03_idAddress);
            return $address;
        }else{
            $message  = "Não foi possível alterar endereço, entre em contato com SAC";
            return json_encode($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($t03_idAddress)
    {
        $address = Address::find($t03_idAddress);
        $delete = $address->delete();
        if($delete){
            $message  = "Endereço excluido com sucesso";
            return json_encode($message);
        }else{
            $message  = "Não foi possível excluir o endereço, entre em contato com SAC";
            return json_encode($message);
        }

    }
}
