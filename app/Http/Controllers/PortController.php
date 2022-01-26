<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortController extends Controller
{
    public function index()
    {
        $response = Http::get('https://61ee53a9d593d20017dbad62.mockapi.io/Ports');
        $data = $response->json();
        return $data;
        
    }
};