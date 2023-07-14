<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pintu_model;
use App\Http\Controllers\Controller;

class pintu_controller extends Controller
{
    // tampil data ke tabel
    public function tampilData(){
        $data = pintu_model::paginate(10);

        return view('welcome', ['datas'=>$data]);
    }

    // menyimpan data ke database
    public function simpanData(Request $request){
        $data = pintu_model::create([
            "sumbu_y" => floatval($request->sum_y),
            "sumbu_x" => floatval($request->sum_x),
            "status" => $request->status
        ]);

        if($data){
            return ["Pesan" => "Data berhasil disimpan"]; 
        }
        return ["Pesan" => "Data gagal disimpan"];
    }

    // membaca data terbaru
    public function showRecentStatus(){
        $status = pintu_model::latest()->first();
        return response()->json($status);
    }

    
}
