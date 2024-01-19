<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\dashboard;
use Illuminate\Http\Request;

class CapsterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = dashboard::whereDate('created_at', today())
                                ->get();
        $totaldata = dashboard::whereDate('created_at', today())->count();
        return view('beken.dashboard',[
            "title" => "Dashboard",
            "posts" => Post::all(),
            "dashboard" => $dashboard,
            "total" => $totaldata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beken.tambah',[
            "title" => "tambah caps",
            "posts" => Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required',
            'email' => 'required|email',
            'notelp' => 'required|min:9|max:15',
            'pengalaman' => 'required',
            'status' => 'required'


           
        ]);

        Post::create($validated);
        return redirect('/dashboard')->with('sucess', 'Berhasil Ditambahkan Happy Cukur:)');
    }

    /**
     * Display the specified resource.
     */
    public function show($nama)
    {
        $capster = Post::where('nama',$nama)->first();
        $dashboards = Dashboard::where('nama', $nama)
                    ->whereDate('created_at', today())
                    ->orderBy('jam','asc')
                    ->get();
        return view('beken.dashboards', [
            "title" => "Orderan",
            "capster" => $capster,
            "posts" => Post::all(),
            "dashboard" => $dashboards
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
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
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'status' => 'required'
        ]);
    
        // Perbarui data dashboard dengan ID yang sesuai
        Post::where('id', $id)->update($validated);
    
        return redirect('/dashboard')->with('sucess', 'Berhasil Diubah Happy Cukur:)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
