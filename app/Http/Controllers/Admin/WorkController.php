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
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('works', 'public');
        }
        Work::create($data);
        return redirect()->route('admin.works.index')->with('success', 'Work created successfully.');
    }

    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('works', 'public');
        }
        $work->update($data);
        return redirect()->route('admin.works.index')->with('success', 'Work updated successfully.');
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('admin.works.index')->with('success', 'Work deleted successfully.');
    }
}
