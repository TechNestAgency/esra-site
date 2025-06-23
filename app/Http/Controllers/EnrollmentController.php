<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'course' => 'required|string',
            'days_per_week' => 'required|integer|min:1|max:7',
            'preferred_days' => 'required|array|min:1',
            'message' => 'nullable|string',
        ]);

        $enrollment = Enrollment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['mobile'],
            'gender' => $validated['gender'],
            'course' => $validated['course'],
            'days_per_week' => $validated['days_per_week'],
            'preferred_days' => json_encode($validated['preferred_days']),
            'message' => $validated['message'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your enrollment request has been submitted successfully. We will contact you shortly!'
        ]);
    }
}
