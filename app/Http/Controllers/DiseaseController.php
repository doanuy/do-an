<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    // DANH SÁCH + SEARCH + PAGINATION
    public function index(Request $request)
    {
        $query = Disease::query()->latest();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $diseases = $query->paginate(5)->withQueryString();

        return view('diseases.index', compact('diseases'));
    }

    public function create()
    {
        return view('diseases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Disease::create($request->only('name', 'description'));

        return redirect()->route('diseases.index')
                         ->with('success', 'Thêm bệnh thành công!');
    }

    public function show(Disease $disease)
    {
        return view('diseases.show', compact('disease'));
    }

    public function edit(Disease $disease)
    {
        return view('diseases.edit', compact('disease'));
    }

    public function update(Request $request, Disease $disease)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $disease->update($request->only('name', 'description'));

        return redirect()->route('diseases.index')
                         ->with('success', 'Cập nhật thành công!');
    }

    public function destroy(Disease $disease)
    {
        $disease->delete();

        return redirect()->route('diseases.index')
                         ->with('success', 'Xóa thành công!');
    }
}