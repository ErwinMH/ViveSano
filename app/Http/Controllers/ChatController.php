<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{

    public function index()
    {
       return view('chat.index');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openai.api_key'),
            'Content-Type' => 'application/json',
        ])->post(config('services.openai.base_url') . 'chat/completions', [
    'messages' => [
    ['role' => 'system', 'content' => 'Usuario'],
    ['role' => 'user', 'content' => $message],
    ],
    ]);
    $response = json_decode($response->body(), true);
    
    $answer = $response['choices'][0]['message']['content'];
    
    // Lógica para mostrar la respuesta al usuario en la vista
    return view('chat.index', ['answer' => $answer]);
    }
}
