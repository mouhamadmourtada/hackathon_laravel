<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Produit\UpdateProduitRequest;
use App\Http\Requests\Produit\CreateProduitRequest;
use App\Http\Resources\Produit\ProduitResource;
use App\Models\Produit;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProduitController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $produits = Produit::useFilters()->dynamicPaginate();

        return ProduitResource::collection($produits);
    }

    public function store(CreateProduitRequest $request): JsonResponse
    {
        $produit = Produit::create($request->validated());

        return $this->responseCreated('Produit created successfully', new ProduitResource($produit));
    }

    public function show(Produit $produit): JsonResponse
    {
        return $this->responseSuccess(null, new ProduitResource($produit));
    }

    public function update(UpdateProduitRequest $request, Produit $produit): JsonResponse
    {
        $produit->update($request->validated());

        return $this->responseSuccess('Produit updated Successfully', new ProduitResource($produit));
    }

    public function destroy(Produit $produit): JsonResponse
    {
        $produit->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $produit = Produit::onlyTrashed()->findOrFail($id);

        $produit->restore();

        return $this->responseSuccess('Produit restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $produit = Produit::withTrashed()->findOrFail($id);

        $produit->forceDelete();

        return $this->responseDeleted();
    }
}
