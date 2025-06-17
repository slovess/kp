<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');
        
        // Validate sort parameters
        $allowedSorts = ['id', 'title', 'created_at'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'desc';

        $locations = Location::orderBy($sortBy, $sortOrder)->paginate(15);
        $locations->appends(request()->query());
        
        return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.locations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:locations,title',
        ]);

        Location::create($request->only('title'));

        return redirect()->route('admin.locations.index')->with('success', 'Локация добавлена!');
    }

    public function edit(Location $location)
    {
        return view('admin.locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:locations,title,' . $location->id,
        ]);

        $location->update($request->only('title'));

        return redirect()->route('admin.locations.index')->with('success', 'Локация обновлена!');
    }

    public function destroy(Location $location)
    {
        if ($location->goods()->count() > 0) {
            return redirect()->route('admin.locations.index')->with('error', 'Нельзя удалить локацию, у которой есть товары!');
        }

        $location->delete();
        return redirect()->route('admin.locations.index')->with('success', 'Локация удалена!');
    }
}
