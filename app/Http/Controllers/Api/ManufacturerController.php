<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturer = Manufacturer::all();

        return $manufacturer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verify = Manufacturer::firstOrNew(['t07_cnpj'=> $request->t7_cnpj]);
        if($verify->t07_cnpj!=NULL){
            $message  = "Fabricante Existente!";
            return json_encode($message);
        }else{
            $dataForm = [
                        't07_name' => $request->t07_name,
                        't07_cnpj' => $request->t07_cnpj,
                        't07_address '=> $request->t07_address,
                        't07_addon'=> $request->t07_addon,
                        't07_neighborhood'=> $request->t07_neighborhood,
                        't07_city'=> $request->t07_city,
                        't07_zipCode'=> $request->t07_zipCode,
                        't07_state'=> $request->t07_state,
                        't07_email' => $request->t07_email
                        ];
                $insert = Manufacturer::create($dataForm);
                if($insert){
                    return $insert;
                }else{
                    $message  = "Não foi possível efetuar Cadastro do Fabricante, entre em contato com ADM do Sistema";
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
    public function show($t07_idManufacturer)
    {
        $manufacturer = Manufacturer::find($t07_idManufacturer);
        return $manufacturer;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t07_idManufacturer)
    {
        $manufacturer = Manufacturer::find($t07_idManufacturer);
        $dataForm = [
            't07_name' => $request->t07_name,
            't07_cnpj' => $request->t07_cnpj,
            't07_address '=> $request->t07_address,
            't07_addon'=> $request->t07_addon,
            't07_neighborhood'=> $request->t07_neighborhood,
            't07_city'=> $request->t07_city,
            't07_zipCode'=> $request->t07_zipCode,
            't07_state'=> $request->t07_state,
            't07_email' => $request->t07_email
            ];

        $update = $manufacturer->update($dataform);
        if($update){
            return $update;
        }else{
            $message  = "Não foi possível alterar os dados Fabricante, entre em contato com ADM do Sistema";
            return json_encode($message);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($t07_idManufacturer)
    {
        $manufacturer = Manufacturer::find($t07_idManufacturer);
        $delete =  $manufacturer->delete();
        if($delete){
             $message = "Fabricante excluir com  Sucesso";
        }else{
            $message = 'Erro ao  excluir fabricate, entre em contato com ADM do Sistema';
        }

        return json_encode($message);
    }
}
