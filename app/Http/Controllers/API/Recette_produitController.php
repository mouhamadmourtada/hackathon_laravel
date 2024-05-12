<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recette_produit\UpdateRecette_produitRequest;
use App\Http\Requests\Recette_produit\CreateRecette_produitRequest;
use App\Http\Resources\Recette_produit\Recette_produitResource;
use App\Models\Recette_produit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class Recette_produitController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $recette_produits = Recette_produit::useFilters()->dynamicPaginate();

        return Recette_produitResource::collection($recette_produits);
    }

    public function store(CreateRecette_produitRequest $request): JsonResponse
    {
        $recette_produit = Recette_produit::create($request->validated());

        return $this->responseCreated('Recette_produit created successfully', new Recette_produitResource($recette_produit));
    }

    public function show(Recette_produit $recette_produit): JsonResponse
    {
        return $this->responseSuccess(null, new Recette_produitResource($recette_produit));
    }

    public function update(UpdateRecette_produitRequest $request, Recette_produit $recette_produit): JsonResponse
    {
        $recette_produit->update($request->validated());

        return $this->responseSuccess('Recette_produit updated Successfully', new Recette_produitResource($recette_produit));
    }

    public function destroy(Recette_produit $recette_produit): JsonResponse
    {
        $recette_produit->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $recette_produit = Recette_produit::onlyTrashed()->findOrFail($id);

        $recette_produit->restore();

        return $this->responseSuccess('Recette_produit restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $recette_produit = Recette_produit::withTrashed()->findOrFail($id);

        $recette_produit->forceDelete();

        return $this->responseDeleted();
    }
}
