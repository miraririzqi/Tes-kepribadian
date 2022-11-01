<?php

namespace App\Http\Controllers;

use App\Models\kepribadian;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardJenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.jenis.index', [
            // 'kepribadians' => kepribadian::all()
            'kepribadians' => kepribadian::where('user_id', auth()->user()->id)->get()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataJenis = $request->validate([
            'user_id' => 'required',
            'tipe_kepribadian' => 'required|max:255',
            'Ket_kepribadian' => 'required'
        ]);
        kepribadian::create($dataJenis);
        return redirect('/dashboard/jenis')->with('success', 'Tambah Jenis Kepribadian Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kepribadian  $kepribadian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.jenis.show', [
            'kepribadians' => kepribadian::where('id', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kepribadian  $kepribadian
     * @return \Illuminate\Http\Response
     */
    public function edit(kepribadian $kepribadian, $id)
    {
        return view('dashboard.jenis.edit', [
            'kepribadian' => kepribadian::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kepribadian  $kepribadian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kepribadian $kepribadian, $id)
    {
        $dataJenisup = $request->validate([
            'user_id' => 'required',
            'tipe_kepribadian' => 'required|max:255',
            'Ket_kepribadian' => 'required'
        ]);
        kepribadian::where('id', $id)
            ->update($dataJenisup);
        return redirect('/dashboard/jenis')->with('success', 'Data di update Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kepribadian  $kepribadian
     * @return \Illuminate\Http\Response
     */
    public function destroy(kepribadian $kepribadian, $id)
    {
        kepribadian::destroy($id);
        return redirect('/dashboard/jenis')->with('success', 'Data dihapus Berhasil!');
    }
}
