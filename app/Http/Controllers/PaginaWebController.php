<?php

namespace App\Http\Controllers;

use App\Models\Pagina_Web;
use Illuminate\Http\Request;
use App\Http\Requests\Pagina_Web\StoreRequest;
use App\Http\Requests\Pagina_Web\UpdateRequest;

class PaginaWebController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagina__webs = Pagina_Web::get();
        return view('admin.pagina_web.index',compact('pagina__webs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pagina_web.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Pagina_Web::create($request);
        return redirect()->route('pagina__webs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pagina_Web $pagina_web)
    {
        return view('admin.pagina_web.show',compact('pagina_web'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagina_Web $pagina_web)
    {
        return view('admin.edit.pagina_web.show',compact('pagina_web'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pagina_Web $pagina_web)
    {
        Pagina_Web::update($request->all());
        return redirect()->route('pagina__webs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pagina_Web $pagina_web)
    {
        $pagina_web->delete();
        return redirect()->route('pagina__webs.index');
    }
}
