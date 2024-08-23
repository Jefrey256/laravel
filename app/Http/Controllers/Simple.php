<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple extends Controller
{
    public function index()
    {
        $fakeData = [
            'id' => 1,
            'name' => 'test',
            'email' => 'furryz2001@gmail.com',
        ];
        return response()->json($fakeData);
    }
}
