<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
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

        $validatedData['dokumen_pdf'] = $request->file('dokumen_pdf')->store('dokumen_surat_masuk', 'public');

        SuratMasuk::create($validatedData);

        return redirect()->back()->with('success', 'Surat Masuk berhasil ditambahkan');
    }
}
