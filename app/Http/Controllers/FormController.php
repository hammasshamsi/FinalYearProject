<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        // Map the validated data to match the API's expected field names
        $mappedData = [
            "user_type" => "student",
            'Name' => $validated['name'],
            'Email' => $validated['email'],
            'Age' => $validated['age'],
            'Gender' => $validated['gender'], 
            'Nationality' => $validated['nationality'],
            'Current_Country' => $validated['current_country'],
            'Highest_Education' => $validated['highest_education'],
            'Field_of_Study' => $validated['field_of_study'],
            'GPA' => $validated['gpa'],
            'IELTS_Score' => $validated['ielts_score'],
            'Visa_Type' => $validated['visa_type'],
            'Applied_Country' => $validated['applied_country'],
            'Previous_Travel_History' => $validated['previous_travel_history'],
            'Bank_Statement_Amount' => $validated['bank_statement_amount'],
            'Sponsorship_Type' => $validated['sponsorship_type'],
        ];
        \Log::info('Data Sent to API:', $mappedData);

        try {
            $response = Http::withOptions(['verify' => false]) // Disable SSL verification
                ->withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->post('https://globalvisaapi.onrender.com/predict', $mappedData);

            \Log::info('API Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['prediction'])) {
                    return response()->json([
                        'message' => 'Form submitted successfully!',
                        'prediction' => $responseData['prediction'],
                        'approval_probability' => $responseData['approval_probability']
                    ], 200);
                }

                return response()->json(['message' => 'Form submitted successfully, but no prediction was returned.'], 200);
            }

            return response()->json([
                'message' => 'Failed to submit the form.',
                'error' => $response->json(),
            ], $response->status());
        } catch (\Exception $e) {
            \Log::error('Error while submitting form:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'An error occurred.', 'error' => $e->getMessage()], 500);
        }
    }
}

//         $mappedData = [
//             'Name' => $validated['name'],
//             'Email' => $validated['email'],
//             'Age' => $validated['age'],
//             'Gender' => $validated['gender'], // Map to uppercase "Gender"
//             'Nationality' => $validated['nationality'],
//             'Current_Country' => $validated['current_country'],
//             'Highest_Education' => $validated['highest_education'],
//             'Field_of_Study' => $validated['field_of_study'],
//             'GPA' => $validated['gpa'],
//             'IELTS_Score' => $validated['ielts_score'],
//             'Visa_Type' => $validated['visa_type'],
//             'Applied_Country' => $validated['applied_country'],
//             'Previous_Travel_History' => $validated['previous_travel_history'],
//             'Bank_Statement_Amount' => $validated['bank_statement_amount'],
//             'Sponsorship_Type' => $validated['sponsorship_type'],
//         ];

//         // Process the data (e.g., send to an external API or log it)
//         // Example: Sending to an external API
//             try {
//             $response = Http::withOptions(['verify' => false]) // Disable SSL verification
//                 ->post('https://globalvisaapi.onrender.com/predict', $mappedData);
            

//             \Log::info('API Response:', [
//                 'status' => $response->status(),
//                 'body' => $response->body(),
//             ]);    
//             if ($response->successful()) {
//                 $responseData = $response->json();
//                 if (isset($responseData['prediction'])) {
//                     return response()->json([
//                         'message' => 'Form submitted successfully!',
//                         'prediction' => $responseData['prediction'],
//                     ], 200);
//                 }
//                 return response()->json(['message' => 'Form submitted successfully!', 'data' => $response->json()], 200);
//             }

//             return response()->json(['message' => 'Failed to submit the form.', 'error' => $response->body()], 400);
//         } catch (\Exception $e) {
//             return response()->json(['message' => 'An error occurred.', 'error' => $e->getMessage()], 500);
//         }
//     }
// }
