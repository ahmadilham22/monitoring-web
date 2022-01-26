<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function facebook()
    {
        $response = Http::get('https://61ee53a9d593d20017dbad62.mockapi.io/datafacebook');
        $data = $response->json();
        return $data;
    }

    public function twitter()
    {
        $response = Http::get('https://61ee53a9d593d20017dbad62.mockapi.io/datatwitter');
        $data = $response->json();
        return $data;
    }

    public function youtube()
    {
        $response = Http::get('https://61ee53a9d593d20017dbad62.mockapi.io/datafacebook');
        $data = $response->json();
        return $data;
    }
}