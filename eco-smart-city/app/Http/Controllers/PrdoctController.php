<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrdoctController extends Controller
{
    public function show()
    
    {
        $data =[
            'name'=>'Laptop',
            'price'=>7000,
            'brand'=>'Dell'
        ];
        return view('product',compact('data'));

    }
}
