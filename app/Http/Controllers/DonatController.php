<?php

namespace App\Http\Controllers;

use App\Models\Donat;
use Illuminate\Http\Request;

class DonatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donats = Donat::all();
        return view('donat.index', compact('donats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Donat::create($request->all());
        return redirect('/donat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donat $donat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $donat = Donat::findOrFail($id);
       return view('donat.edit', compact('donat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $donat = Donat::findOrFail($id);
    $donat->update($request->all());

    return redirect('/donat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Donat::destroy($id);
        return redirect('/donat');
    }
}
