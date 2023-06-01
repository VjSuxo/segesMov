<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Http\Requests\Inventario\StroreRequest;
use App\Http\Requests\Inventario\UpdateRequest;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Inventario::get();
        return view('admin.inventario.index',compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Inventario::create($request);
        return redirect()->route('inventarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        return view('admin.inventario.show',compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        return view('admin.edit.inventario.show',compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Inventario $inventario)
    {
        Inventario::update($request->all());
        return redirect()->route('inventarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventarios.index');
    }
}
