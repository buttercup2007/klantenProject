<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private array $questions = [
        [
            'question' => 'Wat is studiefinanciering?',
            'answers' => [
                ['text' => 'Een lening/studiebeurs van de overheid', 'correct' => true],
                ['text' => 'Een baan bij DUO', 'correct' => false],
            ],
        ],
        [
            'question' => 'Wie heeft recht op studentfinanciering?',
            'answers' => [
                ['text' => 'Studenten die een erkende mbo-, hbo- of universitaire opleiding volgen en aan de voorwaarden voldoen.', 'correct' => true],
                ['text' => 'Studenten die op de middelbare school zitten.', 'correct' => false],
            ],
        ],
        [
            'question' => 'Wat is een aanvullende beurs?',
            'answers' => [
                ['text' => 'Dat is extra geld voor studenten van wie de ouders een lager inkomen hebben.', 'correct' => true],
                ['text' => 'Dat is geld voor studenten die moeite hebben met het mbo.', 'correct' => false],
            ],
        ],
        [
            'question' => 'Krijgen studenten ook een OV-kaart?',
            'answers' => [
                ['text' => 'Ja, veel studenten hebben recht op een studentenreisproduct waarmee zij gratis of met korting kunnen reizen.', 'correct' => true],
                ['text' => 'Ja, maar studenten kunnen niet gratis of met korting reizen.', 'correct' => false],
            ],
        ],
        [
            'question' => 'Moet je studiefinanciering terugbetalen?',
            'answers' => [
                ['text' => 'Altijd', 'correct' => false],
                ['text' => 'Soms, afhankelijk van je situatie', 'correct' => true],
            ],
        ],
    ];

    public function questions()
    {
        $questions = collect($this->questions)->map(function ($question) {
            return [
                'question' => $question['question'],
                'answers' => collect($question['answers'])->pluck('text')->values(),
            ];
        });

        return response()->json($questions);
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers', []);

        $score = 0;

        foreach ($answers as $index => $selectedAnswer) {

            if (!isset($this->questions[$index])) {
                continue;
            }

            $correctAnswer = collect(
                $this->questions[$index]['answers']
            )->firstWhere('correct', true);

            if ($selectedAnswer === $correctAnswer['text']) {
                $score++;
            }
        }

        return response()->json([
            'score' => $score,
            'total' => count($this->questions),
        ]);
    }
}