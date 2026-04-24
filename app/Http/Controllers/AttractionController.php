<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Zone;

class AttractionController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $attractions = Attraction::when($keyword, function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        })->paginate(5);

        return view('admin.pages.attractions.index', compact('attractions'));
    }

    public function create()
    {
        $zones = Zone::all();
        return view('admin.pages.attractions.create', compact('zones'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'zone_id' => 'required|exists:zones,id',
            'name' => 'required|string|max:200',
            'description' => 'nullable',
            'ticket_price' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',    
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Attraction::create($validatedData);

        return redirect()->route('admin.attractions.index')->with('success', 'Attraction created successfully.');
    }

    public function show(string $id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('admin.pages.attractions.show', compact('attraction'));
    }

    public function edit(string $id)
    {
        $zones = Zone::all();
        $attraction = Attraction::findOrFail($id);

        return view('admin.pages.attractions.edit', compact('attraction', 'zones'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'zone_id' => 'required|exists:zones,id',
            'name' => 'required|string|max:200',
            'description' =>
             'nullable',
            'ticket_price' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'The name field is required.',
        ]);

        $attraction = Attraction::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $attraction->update($validatedData);

        return redirect()->route('admin.attractions.index')->with('success', 'Attraction updated successfully.');
    }

    public function destroy(string $id)
    {
        $attraction = Attraction::findOrFail($id);
        $attraction->delete();

        return redirect()->route('admin.attractions.index')->with('success', 'Attraction deleted successfully.');
    }

    public function showAttractions(string $id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('landing.pages.detail-attraction', compact('attraction'));
    }
}