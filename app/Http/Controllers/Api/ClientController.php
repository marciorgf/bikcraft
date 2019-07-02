<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return $clients;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veryfy =  Client::firstOrNew(['t01_email'=> $request->t07_email]);
        if($veryfy){
            $message  = "Cliente Existente!";
            return json_encode($message);
        }else{
                $dataForm =[
                            't01_name' => $request->t01_name,
                            't01_cpf' => $request->t01_cpf,
                            't01_phone' => $request->t01_phone,
                            't01_mobile' => $request->t01_mobile,
                            't01_birthDate' => $request->t01_birthDate,
                            't01_sex' => $request->t01_sex,
                            't01_email' => $request->t01_email,
                            't01_password' => $request->t01_password
                        ];
                        $insert = Client::create($dataForm);
                        if ($insert){
                            return $insert;
                            }else{
                            $message  = "Não foi possível efetuar seu cadastro, entre em contato com SAC";
                            return json_encode($message);
                        }
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($t01_idClient)
    {
        $client = Client::find($t01_idClient);
        return $client;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($t01_idClient)
    {
        $client= Client::find($t01_idClient);
        return $client;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t01_idClient)
    {
        $client = Client::find($t01_idClient);
        $dataForm =[
            't01_name' => $request->t01_name,
            't01_cpf' => $request->t01_cpf,
            't01_phone' => $request->t01_phone,
            't01_mobile' => $request->t01_mobile,
            't01_birthDate' => $request->t01_birthDate,
            't01_sex' => $request->t01_sex,
            't01_email' => $request->t01_email,
            't01_password' => $request->t01_password
        ];
        $update = $client->update($dataForm);

        if($update){

            $client = Client::find($t01_idClient);
            return $client;
        }else{
            $message  = "Não foi possível atualizar seu cadastro, entre em contato com SAC";
            return json_encode($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($t01_idClient)
    {
        $client = Client::find($t01_idClient);
        $delete = $client->detete();

        if($delete){
            $message  = "Cadastro excluido com sucesso";
            return json_encode($message);
        }else{
            $message  = "Não foi possível excluir seu cadastro, entre em contato com SAC";
            return json_encode($message);
        }

    }
}
