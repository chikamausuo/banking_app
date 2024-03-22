<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transferController extends Controller
{
    public function create_trf(){
        return view('transfer');
    }

    public function store_trf(){
        return "store_trf form";
    }

    public function update_trf(){
        return "update_trf form";
    }

    public function reciept_trf(){
        return view('reciept');
    }
}
