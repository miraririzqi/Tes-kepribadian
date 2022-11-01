<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Models\tipesoal;
use Illuminate\Http\Request;

class DashboardSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.soal.index', [
            'soals' => soal::join(
                'tipesoals',
                'tipesoals.id', '=', 'soals.id_tipesoal'
                )->get([
            
                    'soals.id',
                    'tipesoals.tipe_soal',
                    'soals.soal'
            ])
        ]);
        // dd(soal::join('tipesoals','tipesoals.id', '=', 'soals.id_tipesoal')->get([
        //     'soals.id','tipesoals.tipe_soal','soals.soal'
        // ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.soal.create',[
            'soals' => soal::all(),
            'tipesoals' => tipesoal::all()
        ]);
        //dd(tipesoal::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputsoal = $request->validate([
            'id_tipesoal' => 'required|max:255',
            'soal' => 'required'
        ]);
        soal::create($inputsoal);
        return redirect('dashboard/soal')->with('success', 'Tambah soal berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(soal $soal)
    {
        return view('dashboard.soal.edit', [
            'soals' => $soal,
            'tipesoals' => tipesoal::all()
        ]);
        //dd(soal::where('id_tipesoal', $soal->id_tipesoal)->get());
        //dd($soal->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soal $soal)
    {
        $editsoal = $request->validate([
            'id_tipesoal' => 'required',
            'soal' => 'required|max:255'
        ]);
        soal::where('id', $soal->id)
            ->update($editsoal);
        return redirect('/dashboard/soal')->with('success', 'Data di update Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(soal $soal)
    {
        soal::destroy($soal->id);
        return redirect('dashboard/soal')->with('success', 'Soal berhasil terhapus!');
        //dd($soal->id);
    }
}
