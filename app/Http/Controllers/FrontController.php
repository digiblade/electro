<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutModel;

class FrontController extends Controller
{
    public function FrontIndex(){
        $data = AboutModel::get()->first();
        // return $data;
        return view('front.index',compact('data'));
    }
}
