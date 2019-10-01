<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        return "Setting admin";
    }
    public function show($id){
        if($id < 10){
            $result = 'Nhỏ hơn 10';
        }else{
            $result = 'Lớn hơn hoặc bằng 10';
        }
        // return view('welcome')->with('result',$result);   //cach1
        return view('welcome')->with([
            'result' => $result,
            'id' => $id
        ]);
    }
}
