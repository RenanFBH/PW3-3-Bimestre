<?php

namespace App\Http\Controllers;

use App\Models\Gerente;
use App\Http\Requests\StoreGerenteRequest;
use App\Http\Requests\UpdateGerenteRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('gerentes.index', [
            'gerentes' => gerente::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('gerentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGerenteRequest $request) : RedirectResponse
    {
        Gerente::create($request->validated());

        return redirect()->route('gerentes.index')
                ->withSuccess('New Gerente is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gerente $gerente) : View
    {
        return view('gerentes.show', compact('gerente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gerente $gerente) : View
    {
        return view('gerentes.edit', compact('gerente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGerenteRequest $request, Gerente $gerente) : RedirectResponse
    {
        $gerente->update($request->validated());

        return redirect()->back()
                ->withSuccess('Gerente is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gerente $gerente) : RedirectResponse
    {
        $gerente->delete();

        return redirect()->route('gerentes.index')
                ->withSuccess('Gerente is deleted successfully.');
    }
}