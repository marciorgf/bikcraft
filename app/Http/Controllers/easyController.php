<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Model\Estimate;

class easyController extends Controller
{

    public function index ()
    {
       $dataQuery = Estimate::all();

        return view ('estimate')->with('dataQuery', $dataQuery);


    }
    public function getToken()
    {
        $client = new Client(['headers' => ['Content-Type'=>'application/json', 'accept'=>'application/json']]);
        $result = $client->post('https://api.easymundi.com/oauth/token',
                                ['form_params' =>[
                                'grant_type' => 'password',
                                'client_id'   => 1,
                                'client_secret' =>'1VZlziQ8J2obtEg1NByxxnC4DJqq6BeXs2Lxgkry',
                                'username' => 'admin@easymundi.com',
                                'password'=> '123456',
                                'scope' => '*'
                                ]
        ]);



        return $token= json_decode($result->getBody(), true);
    }

    public function getEstimate($token)
    {
        $autorization = $token['token_type']." ". $token['access_token'];
        $client = new Client(['headers' => ['Content-Type'=>'application/json',
                                            'accept'=>'application/json',
                                            'Authorization'=>$autorization]]);

        $result = $client->get('https://api.easymundi.com/api/shipping/estimate',
                                            ['form_params' =>[
                                            'value' => '123.31',
                                            'weight'=> '430',
                                            'province'=> 'SP',
                                            'currency'=> 'USD',
                                            'zipcode'=> '04547-003']
                                            ]);

         return $estimate= json_decode($result->getBody(), true);

    }


    public function store()
    {
        $token = $this->getToken();
        $estimates = $this->getEstimate($token);

        $input = Estimate::create($estimates);

        if($input){return redirect()->index();}
    }


}
