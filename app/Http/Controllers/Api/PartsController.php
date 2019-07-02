<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parts;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts =  Parts::all();
        return $parts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = ['t04_name' => $request->t04_name,
                     't04_material'=> $request->t04_maretial,
                     't04_color'=> $request->t04_color,
                     't04_value'=> $request->t04_value,
                     't07_idManufacturer'=> $request->t07_idManufacturer
                    ];
        $insert = Parts::create($dataForm);
        if($insert)
                return $insert;
                else{
                    $message = 'Erro ao inserir peça, contate o administrador do sistema!';
                    return jason_encode($message);
                }
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $t04_idParts)
    {
        $part = Parts::find($t04_idParts);
        $dataForm = ['t04_name' => $request->t04_name,
                    't04_material'=> $request->t04_maretial,
                    't04_color'=> $request->t04_color,
                    't04_value'=> $request->t04_value,
                    't07_idManufacturer'=> $request->t07_idManufacturer
                        ];
        $update = $part->uptade($dataForm);
        if($update)
              return $update;
              else {
                  $message = 'Erro ao alterar peça, contate o administrador do Sistema ';
                  return json_encode($message);
              }

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($t04_idParts)
    {
        $part = Parts::find($t04_idParts);
        $delete = $part->delete();

        if($delete){
            $message = "Peça excluida com  Sucesso";
       }else{
           $message = 'Erro ao  excluir peça, entre em contato com ADM do Sistema';
       }

       return json_encode($message);


    }
}
