<?php
namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }

    public function reply(Request $request)
    {
        $question = $request->input('question');

        $response = Chat::where('question', $question)->first();

        if ($response) {
            return response()->json(['answer' => $response->answer]);
        }

        return response()->json(['answer' => 'Maaf, saya tidak mengerti pertanyaan Anda.']);
    }
}

