<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secteurs = Secteur::all();
        return response()->json($secteurs);
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
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:secteurs,code',
            'intitule' => 'required|string|max:255|unique:secteurs,intitule',
        ]);

        $secteur = Secteur::create($request->only(['code', 'intitule']));

        return response()->json($secteur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Secteur $secteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secteur $secteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secteur $secteur)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:secteurs,code,' . $secteur->id,
            'intitule' => 'required|string|max:255|unique:secteurs,intitule,' . $secteur->id,
        ]);

        $secteur->update($request->only(['code', 'intitule']));

        return response()->json($secteur);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secteur $secteur)
    {
        $secteur->delete();
        return response()->json(null, 204);
    }
}
