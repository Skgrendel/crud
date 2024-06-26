<?php

namespace App\Http\Controllers;

use App\Models\personals;
use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(personals $personals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personals $personals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personals $personals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personals $personals)
    {
        //
    }
}
