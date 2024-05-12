<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit; 
use App\Models\Categorie;

class ProduitController extends Controller
{
    
    // generate the index method
    public function index()
    {
        
        $produits = Produit::latest()->paginate(10);
        return view('produits.index', compact('produits'));
    }

    // generate the show method
    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }

    // generate the create method
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    // generate the store method
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'prixBase' => 'required',
            'typeQuantite' => 'required',
            'categorie_id' => 'required',
        ]);

        Produit::create($request->all());

        return redirect()->route('produits.index')
            ->with('success', 'Produit créé avec succès.');
    }

    // generate the edit method
    public function edit(Produit $produit)
    {
        $categories = Categorie::all();
        return view('produits.edit', compact('produit', 'categories'));
    }

    // generate the update method
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            'prixBase' => 'required',
            'typeQuantite' => 'required',
            'categorie_id' => 'required',
        ]);

        $produit->update($request->all());

        return redirect()->route('produits.index')
            ->with('success', 'Produit mis à jour avec succès.');
    }

    // generate the destroy method
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produits.index')
            ->with('success', 'Produit supprimé avec succès.');
    }

    // generate the restore method
    public function restore($id)
    {
        $produit = Produit::onlyTrashed()->findOrFail($id);

        $produit->restore();

        return redirect()->route('produits.index')
            ->with('success', 'Produit restauré avec succès.');
    }

    // generate the permanentDelete method
    public function permanentDelete($id)
    {
        $produit = Produit::withTrashed()->findOrFail($id);

        $produit->forceDelete();

        return redirect()->route('produits.index')
            ->with('success', 'Produit supprimé définitivement avec succès.');
    }


}
