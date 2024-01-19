<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\dashboard;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;
use App\Http\Requests\UpdatePostRequest;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home',[
            "title" => "We Barber",
        ]);
    }
    public function price()
    {
        return view('price',[
            "title" => "Price List",
        ]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,dashboard $dashboard)
    {
        $capster = Post::where('id',$id)->get();
        // dd($capster);
        return view('beken.ubah',[
            "title" => "edit",
            "posts" => Post::all(),
            "caps" => $capster
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id)
{
    $validated = $request->validate([
        'nama'=> 'required',
        'email' => 'required',
        'notelp' => 'required',
        'pengalaman' => 'required',
        'status' => 'required'
    ]);

    // Perbarui data dashboard dengan ID yang sesuai
    Post::where('id', $id)->update($validated);

    return redirect('hubungi')->with('success', 'Pesanan Berhasil diubah, Jangan lupa datang yaa.. Happy Bear');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
