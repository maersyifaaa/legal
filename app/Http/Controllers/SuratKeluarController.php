<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required',
            'judul_surat' => 'required',
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'dokumen_pdf' => 'required|mimes:pdf|max:2048'
        ]);

        $validatedData['dokumen_pdf'] = $request->file('dokumen_pdf')->store('dokumen_surat_keluar', 'public');

        SuratKeluar::create($validatedData);

        return redirect()->back()->with('success', 'Surat Keluar berhasil ditambahkan');
    }
}
