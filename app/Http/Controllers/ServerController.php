<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServerController extends Controller
{
    public function index()
    {
        $response = Http::get('https://61ee53a9d593d20017dbad62.mockapi.io/Server');
        $data = $response->json();
        return $data;
    }
    
}