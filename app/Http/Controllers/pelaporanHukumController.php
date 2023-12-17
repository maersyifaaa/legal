<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class pelaporanHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://api.aibm.my.id/hukum');
       
        $pelaporanhukums =  $response->json();
        return view('/status-surat.status_pelaporan_hukum', ['pelaporanhukums'=>$pelaporanhukums['data']['pelaporanhukum'],]);
    }

    /**
     * Show the form for creating a new resource.
     */
     
    public function create()
    {
        //
        return view('pelaporan-hukum.pelaporan_hukum');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         Http::post('https://api.aibm.my.id/hukum', [
            'nama_pelapor' =>$request->nama_pelapor,
            'karyawan_nip'=>$request->karyawan_nip,
            'divisi_pelapor'=>$request->divisi_pelapor,
            'perihal_laporan'=>$request->perihal_laporan,
            'tenggat' => $request->tenggat,
            'tanggal_masuk' => date('Y-m-d'),
            'email'=> $request->email,
        ]);
        return redirect()->route('status-pelaporan.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
