<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\dashboard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use function Laravel\Prompts\search;
use App\Http\Requests\StoredashboardRequest;

use App\Http\Requests\UpdatedashboardRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('beken.dashboard',[
            "title" => "Dashboard",
            "posts" => Post::all()
        ]);
    }
    public function plus()
    {
        return view('beken.tambah',[
            "title" => "tambah caps",
            "posts" => Post::all()
        ]);
    }

    public function hubungi(Request $request)
    {
        $query = $request->input('search');

        $results = dashboard::where('telp', 'LIKE', $query)->get();
 
        return view('hubungi',["title" => "Hubungi"], compact('results', 'query',));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beken.tambah');
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
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedashboardRequest $request,$nama)
    {   
        $validated = $request->validate([
            'status' => 'required',
            'nama'=> 'required',
            'email' => 'required|email',
            'notelp' => 'required|min:9|max:15',
            'pengalaman' => 'required',
            'status' => 'required'


           
        ]);
        

        Post::where('nama',$nama)
                        ->update($validated);
        return redirect('/dashboard')->with('sucess', 'absen Berhasil diubah, dah tidur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
