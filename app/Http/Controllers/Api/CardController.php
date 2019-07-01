<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Client;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cardClient($t01_idClient)
    {
        $cards =  Cards::where('t01_client', '=', $t01_idClient )
                        ->get();
        return $cards;
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
            't02_cardNumber' => $request->t03_address,
            't01_idClient' => $request->t01_idClient,
            't02_company' => $request->t02_addon,
            't02_expiration' => $request->t02_expiration.'-01',
            't02_cardholder' => $request->t02_cardholder
        ];

        $insert = Cards::create($dataForm);
        if ($insert){
            $cards =  Cards::where('t01_idClient', '=', $request->t01_idClient )
                        ->get();
            return $cards;
            }else{
            $message  = "Não foi possível incluir o Cartão de Crédito, entre em contato com SAC";
            return json_encode($message);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($t02_idCard)
    {
        $card = Cards::find($t02_idCard);
        return $cards;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t02_idCard)
    {
        $card = Cards::find($t02_idCard);
        $dataForm =[
            't02_cardNumber' => $request->t03_address,
            't02_company' => $request->t02_addon,
            't02_expiration' => $request->t02_expiration.'-01',
            't02_cardholder' => $request->t02_cardholder
        ];
        $update =  $card->update($dataForm);
        if($update){
            $card = Cards::find($t02_idCard);
            return $card;
        }else{
            $message  = "Não foi possível alteraro dados do cartão de crédito, entre em contato com SAC";
            return json_encode($message);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($t02_idCard)
    {
        $card = Cards::find($t02_idCard);
        $delete = $card->delete();
        if($delete){
            $message  = "Cartão de Crédito excluido com sucesso";
            return json_encode($message);
        }else{
            $message  = "Não foi possível excluir o Cartão de Crédito, entre em contato com SAC";
            return json_encode($message);
        }


    }
}
