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

        if (empty($question)) {
            return response()->json(['answer' => 'Pesan kosong tidak dapat dikirim.']);
        }

        // Memecah pertanyaan menjadi kata-kata
        $words = explode(' ', $question);

        // Mencari jawaban dengan kata-kata yang serupa
        $responses = Chat::all();

        $bestMatch = null;
        $bestScore = 0;

        foreach ($responses as $response) {
            $score = $this->calculateScore($words, $response->question);

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestMatch = $response;
            }
        }

        if ($bestMatch) {
            return response()->json(['answer' => $bestMatch->answer]);
        }

        return response()->json(['answer' => 'Maaf, saya tidak mengerti pertanyaan Anda.']);
    }

    private function calculateScore($words, $responseQuestion)
    {
        $score = 0;

        // Menghitung skor berdasarkan kata-kata yang serupa
        foreach ($words as $word) {
            if (strpos(strtolower($responseQuestion), strtolower($word)) !== false) {
                $score++;
            }
        }

        return $score;
    }
}
