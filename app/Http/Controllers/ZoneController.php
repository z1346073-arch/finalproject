<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'required|string',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Zone::create($validatedData);

        return redirect()->route('admin.zones.index')->with('success', 'Zone created successfully.');
    }

    public function show($id)
    {
        $zone = Zone::findOrFail($id);
        $otherzones = Zone::where('id', '!=', $id)->get();
        return view('admin.pages.zones.show', compact('zone', 'otherzones'));
    }

    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        return view('admin.pages.zones.edit', compact('zone'));
    }

    public function update(Request $request, $id)
    {
        $zone = Zone::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'required|string',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $zone->update($validatedData);

        return redirect()->route('admin.zones.index')->with('success', 'Zone updated successfully.');
    }

    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();

        return redirect()->route('admin.zones.index')->with('success', 'Zone deleted successfully.');
    }

    public function showZones($id)
    {
        $zone = Zone::findOrFail($id);
        return view('landing.pages.detail-zone', compact('zone'));
    }
}