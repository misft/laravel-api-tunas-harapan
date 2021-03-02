<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HelloController extends Controller
{
    const KOTAK_NANAS = 'NANAS'; //Konstanta bertipe string
    
    public function hello(Request $request) {
        $nama = $request->get('nama');
        
        return 'Hello '.$nama;    
        // return request()->getMethod();
    }
}
