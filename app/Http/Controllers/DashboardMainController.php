<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Storage;

class DashboardMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('dashboard.index');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        return view('dashboard.bio.edit', [
            'users' => User::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ddd($request);
        // return $request->file('image')->store('post-images');
        $dataJenisup = $request->validate([
            'username' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'ttgl'=> 'max:255',
            'jeniskelamin'=> 'max:255',
            'pekerjaan'=> 'max:255',
            'pendidikan'=> 'max:255',
            'usia'=> 'max:255',
            'image' => 'image|file|max:1024',
            'password' => 'required|min:5|max:255'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $dataJenisup['image']=$request->file('image')->store('post-imagez');
        }
        // User::where('id', $id)
        User::where('id', auth()->user()->id)
            ->update($dataJenisup);
        return redirect('/dashboard/bio')->with('success', 'Update Profile berhasil');
       //dd($dataJenisup);
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
