<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie; // Assurez-vous d'importer le modèle Category

class CategorieController extends Controller
{
    public function index()
    {
        // $categories = Categorie::all(); 
        // il faut faire une pagination
        $categories = Categorie::latest()->paginate(10);
        return view('categories.index', compact('categories'));
    }


    public function show(Categorie $categorie)
    {
        return view('categories.show', compact('categorie'));
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);

        Categorie::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);

        $categorie->update($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}
