<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;  
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $api ='http://www.omdbapi.com/?i=tt3896198&apikey=23a44bda';
    public function index()
    {
        dd($this->getmoviedata());
        
    }

    public function getmoviedata(){
        $client = new Client();
        $response = $client->request('GET', $this->api);
        return json_decode($response->getBody(), true);
    }

}
