<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function submitOrder(Request $request)
    {
        
        $data = [
            'Nama' => $request->input('Nama'),
            'NIK' => $request->input('NIK'),
            'Provinsi' => $request->input('Provinsi'),
            'Kota' => $request->input('Kota'),
            'HP' => $request->input('HP'),
            
        ];
        return view('dashboarddatapenduduk', compact('data'));
    }
}
