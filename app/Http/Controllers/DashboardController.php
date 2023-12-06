<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;
use App\Models\Post;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredashboardRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show($nama)
    {
        $dashboards = Dashboard::where('nama', $nama)
                    ->orderBy('jam','asc')
                    ->get();
        return view('beken.dashboards', [
            "title" => "Orderan",
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
    public function update(UpdatedashboardRequest $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
