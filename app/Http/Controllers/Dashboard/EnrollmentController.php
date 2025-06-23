<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::latest()->paginate(10);
        return view('dashboard.enrollments.index', compact('enrollments'));
    }

    public function show(Enrollment $enrollment)
    {
        return view('dashboard.enrollments.show', compact('enrollment'));
    }

    public function edit(Enrollment $enrollment)
    {
        return view('dashboard.enrollments.edit', compact('enrollment'));
    }

    public function update(Request $request, Enrollment $enrollment)
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
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $enrollment->update($validated);

        return redirect()->route('dashboard.enrollments.index')
            ->with('success', 'Enrollment updated successfully.');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();

        return redirect()->route('dashboard.enrollments.index')
            ->with('success', 'Enrollment deleted successfully.');
    }

    public function updateStatus(Request $request, Enrollment $enrollment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $enrollment->update($validated);

        return redirect()->route('dashboard.enrollments.index')
            ->with('success', 'Enrollment status updated successfully.');
    }
} 