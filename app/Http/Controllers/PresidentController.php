<?php

namespace App\Http\Controllers;

use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidents = President::all();
        return view('presidents.index', compact('presidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presidents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        President::create($request->all());

        return redirect()->route('presidents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(President $president)
    {
        return view('presidents.show', compact('president'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(President $president)
    {
        return view('presidents.edit', compact('president'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, President $president)
    {
        $president->update($request->all());

        return redirect()->route('presidents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(President $president)
    {
        $president->delete();

        return redirect()->route('presidents.index');
    }
}
