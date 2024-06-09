<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class AlatController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $alats = Alat::all(); // Note the variable name
        return view('peralatan.index', compact('alats')); // Pass 'alats' to the view
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('peralatan.create');
    }

    // Store a newly created resource in storage.
    public function Store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'jenis' => 'required|string|max:50',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|string|max:50',
        ]);

        Alat::create($request->all());

        return redirect()->route('alat.index')->with('success', 'Alat Create successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit(Alat $alat)
    {
        return view('peralatan.edit', compact('alat'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'jenis' => 'required|string|max:50',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|string|max:50',
        ]);

        $alat->update($request->all());

        return redirect()->route('alat.index')->with('success', 'Alat updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Alat $alat)
    {
        $alat->delete();

        return redirect()->route('alat.index')->with('success', 'Alat deleted successfully.');
    }
    public function cetak()
{
    $alat = Alat::all();
    $dompdf = new Dompdf();
    $view = view('peralatan.pdf', compact('alat'))->render();
    $dompdf->loadHtml($view);
    
    // Render PDF
    $dompdf->render();
    
    // Download PDF
    return $dompdf->stream('laporan-alat.pdf');
}
}
