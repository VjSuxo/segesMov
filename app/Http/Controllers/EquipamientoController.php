<?php

namespace App\Http\Controllers;

use App\Models\Equipamiento;
use App\Http\Requests\Equipamiento\StroreRequest;
use App\Http\Requests\Equipamiento\UpdateRequest;

class EquipamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipamientos = Equipamiento::get();
        return view('admin.equipamiento.index',compact('equipamientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.equipamiento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Equipamiento::create($request);
        return redirect()->route('equipamientos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipamiento $equipamiento)
    {
        return view('admin.equipamiento.show',compact('equipamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipamiento $equipamiento)
    {
        return view('admin.edit.equipamiento.show',compact('equipamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Equipamiento $equipamiento)
    {
        Equipamiento::update($request->all());
        return redirect()->route('equipamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipamiento $equipamiento)
    {
        $equipamiento->delete();
        return redirect()->route('equipamientos.index');
    }
}
