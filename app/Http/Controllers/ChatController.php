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
        "X-RapidAPI-Host" => "openai80.p.rapidapi.com",
        "X-RapidAPI-Key" => "32a1b8ba79msh4e8b0c54aa86b12p1a8305jsn18fb066918cc",
        "Content-Type" => "application/json",
    ])
        ->post("https://openai80.p.rapidapi.com/chat/completions", [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $message
                ]
            ]
        ]);

    $response = json_decode($response->body(), true);

    if (isset($response['choices']) && !empty($response['choices'])) {
        $answer = $response['choices'][0]['message']['content'];
    } else {
        $answer = 'No response from the API.';
    }

    // Logic to display the answer to the user in the view
    return view('chat.index', ['answer' => $answer]);
}
}
