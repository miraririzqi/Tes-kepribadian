<?php

namespace App\Http\Controllers;

use App\Models\tipesoal;
use Illuminate\Http\Request;

class DashboardTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tipesoal.index', [
            'tipesoals' => tipesoal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tipesoal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataTipe = $request->validate([
            'tipe_soal' => 'required|max:255'
        ]);
        tipesoal::create($dataTipe);
        return redirect('/dashboard/tipesoal')->with('success', 'Tambah Tipe Soal Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipesoal  $tipesoal
     * @return \Illuminate\Http\Response
     */
    public function show(tipesoal $tipesoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipesoal  $tipesoal
     * @return \Illuminate\Http\Response
     */
    public function edit(tipesoal $tipesoal)
    {
        return view('dashboard.tipesoal.edit', [
            'tipesoals' => tipesoal::where('id', $tipesoal->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipesoal  $tipesoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipesoal $tipesoal)
    {
        $dataJenisup = $request->validate([
            'tipe_soal' => 'required|max:255'
        ]);
        tipesoal::where('id', $tipesoal->id)
            ->update($dataJenisup);
        return redirect('/dashboard/tipesoal')->with('success', 'Data di update Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipesoal  $tipesoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipesoal $tipesoal)
    {
        tipesoal::destroy($tipesoal->id);
        return redirect('dashboard/soal')->with('success', 'Tipe soal berhasil terhapus!');
    }
}
