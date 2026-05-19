<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        return view('admin.works.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'leader' => 'nullable|string|max:255',
            'designer' => 'nullable|string|max:255',
            'developer' => 'nullable|string|max:255',
            'customer' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('works', 'public');
        }

        Work::create($validated);
        return redirect()->route('admin.works.index')->with('success', 'Work created successfully.');
    }

    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'leader' => 'nullable|string|max:255',
            'designer' => 'nullable|string|max:255',
            'developer' => 'nullable|string|max:255',
            'customer' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('works', 'public');
        }

        $work->update($validated);
        return redirect()->route('admin.works.index')->with('success', 'Work updated successfully.');
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('admin.works.index')->with('success', 'Work deleted successfully.');
    }
}
