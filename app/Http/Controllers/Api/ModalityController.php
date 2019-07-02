<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modality;

class ModalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modality = Modality::all();
        return $modality;
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
        $dataform = ['t05_name'=> $request->name];

        $insert = Modality::create($dataform);
        if(insert)
            return $insert;
            else {
                    $message = 'Erro ao inserir nova modalidade, Contate o Adminisrador do Sistema';
                    return json_encode($message);
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t05_idModality)
    {
        $modality = Modality::find($t05_idModality);
        $dataform = ['t05_name'=> $request->name];
        $upddate = $modality->update($dataform);
        if($update)
            return $update;
            else {
                $message = 'Erro ao altera modalidade, Contate o Adminisrador do Sistema';
                return json_encode($message);
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modality = Modality::find($t05_idModality);
        $delete = $modality->delete();
        if($delete){
            $message = "Madalidade excluida com  Sucesso";
       }else{
           $message = 'Erro ao  excluir modalidade, entre em contato com ADM do Sistema';
       }

       return json_encode($message);
    }
}
