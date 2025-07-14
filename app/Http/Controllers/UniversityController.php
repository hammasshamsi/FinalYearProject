<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UniversityController extends Controller
{
    public function submit(Request $request){
        $validated = $request->validate([
            'field' => 'required|string|max:255',
            'degree_level' => 'required|string',
            'avg_gpa_requirement' => 'required|numeric|min:0|max:4',
            'ielts_score_req' => 'required|numeric|min:0|max:9',
            'tuitionfee' => 'required|numeric|min:0',
            'livingcost' => 'required|numeric|min:0',
            'scholarship_avail' => 'required|string',
            'region' => 'required|string',
        ]);

        $mappedData = [
            "Field_Specialization" => $validated['field'],
            "Degree_Level" => $validated['degree_level'],
            "Average_GPA_Requirement" => $validated['avg_gpa_requirement'],
            "IELTS_Requirement" => $validated['ielts_score_req'],
            "Tuition_Fee_USD" => $validated['tuitionfee'],
            "Living_Cost_Per_Year_USD" => $validated['livingcost'],
            "Scholarship_Available" => $validated['scholarship_avail'],
            "Region" => $validated['region'],
        ];

        try {
            $response = Http::withOptions(['verify' => false])
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post('https://globalvisauniapi.onrender.com/recommend', $mappedData);

            if ($response->successful()) {
                $responseData = $response->json();
                // Return JSON for frontend redirect
                return response()->json([
                    'recommendations' => $responseData['recommendations'] ?? [],
                    'status' => $responseData['status'] ?? 'success'
                ], 200);
            }
            return response()->json(['error' => 'Failed to get recommendations.'], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function result(Request $request)
    {
        // Get recommendations from query string (sent by JS as JSON string)
        $recommendations = json_decode($request->query('recommendations', '[]'), true);

        return view('university_result', [
            'recommendations' => $recommendations
        ]);
    }
}
