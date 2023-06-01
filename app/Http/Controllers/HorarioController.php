<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Http\Requests\Horario\StroreRequest;
use App\Http\Requests\Horario\UpdateRequest;

class HorarioController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::get();
        return view('admin.horario.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.horario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Horario::create($request);
        return redirect()->route('horarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        return view('admin.horario.show',compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        return view('admin.edit.horario.show',compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Horario $horario)
    {
        Horario::update($request->all());
        return redirect()->route('horarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('horarios.index');
    }
}
