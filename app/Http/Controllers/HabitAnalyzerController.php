<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use App\Models\KYCInput;
use Illuminate\Http\Request;



class HabitAnalyzerController extends Controller
{
    public function storeKYC(Request $request) {
        $validated = $request->validate([
            'responses' => 'required|array1,'
        ]);

        $kyc = KYCInput::create([
            'user_id' => auth()->id(),
            'responses' => json_encode($validated['responses']),
        ]);

        return response()->json(['message' => 'KYC saved successfully!', 'kyc' => $kyc]);
    }

    public function getSuggestions(Request $request)
    {
        // @phpstan-ignore-next-line
        $kyc = KYCInput::where('user_id', auth()->id())->latest()->first();

        if (!$kyc) {
            return response()->json(['message' => 'No KYC data found.'], 404);
        }

        $responses = json_decode($kyc->responses, true);
        $matchedSuggestions = [];

        foreach ($responses as $response) {
            $suggestions = Suggestion::where('condition', 'LIKE', "%$response%")->get();
            foreach ($suggestions as $suggestion) {
                $matchedSuggestions[] = $suggestion->suggestion;
            }
        }

        return response()->json(['suggestions' => $matchedSuggestions]);

    }
}
