<?php

namespace App\Http\Controllers;

use App\Models\hasiltes;
use App\Models\User;
use App\Models\kepribadian;
use Illuminate\Http\Request;

class DashboardHTInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.hasiltes.index', [
        //     'hasiltess' => hasiltes::where('id_user', auth()->user()->id)->delete()
        // ]);
        // dd(hasiltes::join(
        //     'kepribadians', 
        //     'kepribadians.id', '=', 'hasiltes.id_kepribadian')
        //     ->join(
        //     'users',
        //     'users.id',
        //     '=',
        //     'hasiltes.id_user'
        // )->get(['users.name', 'kepribadians.tipe_kepribadian', 'kepribadians.Ket_kepribadian']));
        $tipe = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '5')->get(['kepribadians.tipe_kepribadian', 'kepribadians.Ket_kepribadian']);
        foreach ($tipe as $tipenket){
            $status = 'Hai , Kamu masuk tipe kepribadian : ' + $tipenket->tipe_kepribadian + ', yang artinya kamu termasuk ' + $tipenket->Ket_kepribadian;
                            
            dd('Hai , Kamu masuk tipe kepribadian : ' + $tipenket->tipe_kepribadian + ', yang artinya kamu termasuk ' + $tipenket->Ket_kepribadian);
            
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hasiltes  $hasiltes
     * @return \Illuminate\Http\Response
     */
    public function show(hasiltes $hasiltes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hasiltes  $hasiltes
     * @return \Illuminate\Http\Response
     */
    public function edit(hasiltes $hasiltes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hasiltes  $hasiltes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hasiltes $hasiltes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hasiltes  $hasiltes
     * @return \Illuminate\Http\Response
     */
    public function destroy(hasiltes $hasiltes)
    {
        //
    }
}
