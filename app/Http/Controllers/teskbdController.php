<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Models\hasiltes;
use App\Models\tipesoal;
use App\Models\user;
use App\Models\kepribadian;

use App\Models\hasiltesawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\dbkepribadian;

class teskbdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tes.index', [
            'tess' => soal::all()
            //hasiltesawal::where('id_user', auth()->user()->id)->delete()
        ]);
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

        // dd($request->input('btnhasil'));
        // if ($request->isMethod('post')) {
        if ($request->input('btnhasil') == 'btnhasiltes') {
            $datahasil = $request->validate([
                'id_user' => 'required',
                'jumlah_l' => 'integer',
                'jumlah_e' => 'integer',
                'jumlah_n' => 'integer',
                'id_kepribadian' => 'integer'
            ]);
            $datahasil['jumlah_l'] = hasiltesawal::where('nilai_l', 1)->count();
            $datahasil['jumlah_e'] = hasiltesawal::where('nilai_e', 1)->count();
            $datahasil['jumlah_n'] = hasiltesawal::where('nilai_n', 1)->count();

            $nama = auth()->user()->name;

            if ($datahasil['jumlah_l'] >= 0 && $datahasil['jumlah_l'] <= 4) {
                if ($datahasil['jumlah_e'] >= 0 && $datahasil['jumlah_e'] <= 11) {
                    if ($datahasil['jumlah_n'] >= 1 && $datahasil['jumlah_n'] <= 8) {
                        $datahasil['id_kepribadian'] = '1';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '1')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    } else if ($datahasil['jumlah_n'] >= 9 && $datahasil['jumlah_n'] <= 16) {
                        $datahasil['id_kepribadian'] = '3';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '3')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    } else if ($datahasil['jumlah_n'] >= 17 && $datahasil['jumlah_n'] <= 24) {
                        $datahasil['id_kepribadian'] = '5';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '5')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    }
                } else if ($datahasil['jumlah_e'] >= 12 && $datahasil['jumlah_e'] <= 23) {
                    if ($datahasil['jumlah_n'] >= 1 && $datahasil['jumlah_n'] <= 8) {
                        $datahasil['id_kepribadian'] = '2';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '2')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    } else if ($datahasil['jumlah_n'] >= 9 && $datahasil['jumlah_n'] <= 16) {
                        $datahasil['id_kepribadian'] = '4';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '4')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    } else if ($datahasil['jumlah_n'] >= 17 && $datahasil['jumlah_n'] <= 24) {
                        $datahasil['id_kepribadian'] = '6';
                        hasiltes::create($datahasil);
                        $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '6')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    }
                }
            } else {
                $datahasil['id_kepribadian'] = '7';
                hasiltes::create($datahasil);
                $tipeket = hasiltes::join('kepribadians', 'kepribadians.id', '=', 'hasiltes.id_kepribadian')->where('hasiltes.id_kepribadian', '7')->get(['kepribadians.Ket_kepribadian', 'kepribadians.tipe_kepribadian']);
                        foreach ($tipeket as $tipenket) {
                            $status = 'Hai '.$nama.', Kamu masuk tipe kepribadian : '.$tipenket->tipe_kepribadian.', yang artinya kamu termasuk '.$tipenket->Ket_kepribadian;
                            return response()->json(['tipeket' => $status]);
                        }
                    }
        } else {
            $datain = $request->validate([
                'id_user' => 'required',
                'id_soal' => 'required',
                'id_tipesoal' => 'required',
                'jawaban' => 'required',
                'nilai_l' => 'integer',
                'nilai_e' => 'integer',
                'nilai_n' => 'integer'
            ]);
            if ($datain['jawaban'] == 'ya') {
                if ($datain['id_tipesoal'] == '1') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 1;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '2') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 1;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '3') {
                    $datain['nilai_l'] = 1;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '4') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '5') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '6') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else {
                    return response()->json(['error' => 'gagal']);
                }
            } else if ($datain['jawaban'] == 'tidak') {
                if ($datain['id_tipesoal'] == '1') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '2') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '3') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '4') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 1;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '5') {
                    $datain['nilai_l'] = 0;
                    $datain['nilai_e'] = 1;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else if ($datain['id_tipesoal'] == '6') {
                    $datain['nilai_l'] = 1;
                    $datain['nilai_e'] = 0;
                    $datain['nilai_n'] = 0;
                    hasiltesawal::create($datain);
                    return response()->json(['success' => 'BERHASIL']);
                } else {
                    return response()->json(['error' => 'gagal']);
                }
            } else {
                return response()->json(['error' => 'gagal']);
            }
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(soal $soal)
    {
        //
    }
}
