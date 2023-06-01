<?php

namespace App\Http\Controllers;

use App\Models\Redes;
use App\Http\Requests\Redes\StoreRequest;
use App\Http\Requests\Redes\UpdateRequest;

class RedesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redes = Redes::get();
        return view('admin.red.index',compact('redes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.red.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Redes::create($request);
        return redirect()->route('redes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Redes $red)
    {
        return view('admin.red.show',compact('red'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Redes $red)
    {
        return view('admin.edit.red.show',compact('red'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Redes $red)
    {
        Redes::update($request->all());
        return redirect()->route('redes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Redes $red)
    {
        $red->delete();
        return redirect()->route('redes.index');
    }
}
