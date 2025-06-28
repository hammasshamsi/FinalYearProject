<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'current_country' => 'required|string',
            'highest_education' => 'required|string',
            'field_of_study' => 'required|string',
            'gpa' => 'required|numeric|min:0|max:4',
            'ielts_score' => 'required|numeric|min:0|max:9',
            'visa_type' => 'required|string',
            'applied_country' => 'required|string',
            'previous_travel_history' => 'required|string',
            'bank_statement_amount' => 'required|numeric|min:0',
            'sponsorship_type' => 'required|string',
            
        ]);

        // Process the data (e.g., send to an external API or log it)
        // Example: Sending to an external API
        $response = Http::post('https://globalvisaapi.onrender.com/predict', $validated);

        if ($response->successful()) {
            return response()->json(['message' => 'Form submitted successfully!', 'data' => $response->json()], 200);
        }

        return response()->json(['message' => 'Failed to submit the form.'], 400);
    }
}
