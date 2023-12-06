<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\dashboard;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('info',[
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
