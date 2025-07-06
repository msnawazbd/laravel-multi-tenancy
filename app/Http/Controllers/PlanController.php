<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::query()->get();
        return view('plans.index', ['plans' => $plans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:plans,slug',
            'post_limit' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'stripe_plan_id' => 'nullable|string|max:255|unique:plans,stripe_plan_id',
        ]);

        Plan::create($validated);

        return redirect()->route('plans.index')
            ->with('success', 'Plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('plans.edit', ['plan' => $plan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:plans,slug,' . $plan->id,
            'post_limit' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'stripe_plan_id' => 'nullable|string|max:255|unique:plans,stripe_plan_id,' . $plan->id,
        ]);

        $plan->update($validated);

        return redirect()->route('plans.index')
            ->with('success', 'Plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
