<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $latihans = Latihan::all();
        return view('latihan.index', compact('latihans'));
    }

    public function create()
    {
        return view('latihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'durasi' => 'required|integer',
            'level_kesulitan' => 'required|string|max:50',
        ]);

        Latihan::create($request->all());

        return redirect()->route('latihan.index')
            ->with('success', 'Latihan created successfully.');
    }

    public function edit(Latihan $latihan)
    {
        return view('latihan.edit', compact('latihan'));
    }

    public function update(Request $request, Latihan $latihan)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'durasi' => 'required|integer',
            'level_kesulitan' => 'required|string|max:50',
        ]);

        $latihan->update($request->all());

        return redirect()->route('latihan.index')
            ->with('success', 'Latihan updated successfully');
    }

    public function destroy(Latihan $latihan)
    {
        $latihan->delete();

        return redirect()->route('latihan.index')
            ->with('success', 'Latihan deleted successfully');
    }
}
