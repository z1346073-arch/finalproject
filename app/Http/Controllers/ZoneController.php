<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use Illuminate\Support\Facades\Storage; 

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('admin.pages.zones.index', compact('zones'));
    }

    public function create()
    {
        return view('admin.pages.zones.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price_range' => 'required',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = basename($imagePath);
        }

        Zone::create($validated);

        return redirect()->route('zones.index')->with('success', 'Zone created successfully.');
    }

    public function show($id)
    {
        $zone = Zone::findOrFail($id);
        return view('admin.pages.zones.show', compact('zone'));
    }

    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        return view('admin.pages.zones.edit', compact('zone'));
    }

    public function update(Request $request, $id)
    {
        $zone = Zone::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price_range' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = basename($imagePath);
        }

        $zone->update($validated);

        return redirect()->route('zones.index')->with('success', 'Zone updated successfully.');
    }

    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();

        return redirect()->route('zones.index')->with('success', 'Zone deleted successfully.');
    }

}
