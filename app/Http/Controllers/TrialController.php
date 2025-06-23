<?php

namespace App\Http\Controllers;

use App\Models\Trial;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trials = Trial::latest()->paginate(10);
        return view('dashboard.trials.index', compact('trials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.trials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'course_type' => 'required|max:255',
            'message' => 'nullable',
            'trial_date' => 'nullable|date'
        ]);

        Trial::create($validated);

        return redirect()->route('trials.index')
            ->with('success', 'Trial request created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trial $trial)
    {
        return view('dashboard.trials.show', compact('trial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trial $trial)
    {
        return view('dashboard.trials.edit', compact('trial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trial $trial)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'course_type' => 'required|max:255',
            'message' => 'nullable',
            'status' => 'required|in:pending,approved,rejected',
            'trial_date' => 'nullable|date'
        ]);

        $trial->update($validated);

        return redirect()->route('trials.index')
            ->with('success', 'Trial request updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trial $trial)
    {
        $trial->delete();

        return redirect()->route('trials.index')
            ->with('success', 'Trial request deleted successfully.');
    }

    public function updateStatus(Request $request, Trial $trial)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $trial->update($validated);

        return redirect()->route('trials.index')
            ->with('success', 'Trial status updated successfully.');
    }
}
