<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitVente\UpdateProduitVenteRequest;
use App\Http\Requests\ProduitVente\CreateProduitVenteRequest;
use App\Http\Resources\ProduitVente\ProduitVenteResource;
use App\Models\ProduitVente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class ProduitVenteController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $produitVentes = ProduitVente::useFilters()->dynamicPaginate();

        return ProduitVenteResource::collection($produitVentes);
    }

    public function store(CreateProduitVenteRequest $request): JsonResponse
    {
        $produitVente = ProduitVente::create($request->validated());

        return $this->responseCreated('ProduitVente created successfully', new ProduitVenteResource($produitVente));
    }

    public function show(ProduitVente $produitVente): JsonResponse
    {
        return $this->responseSuccess(null, new ProduitVenteResource($produitVente));
    }

    public function update(UpdateProduitVenteRequest $request, ProduitVente $produitVente): JsonResponse
    {
        $produitVente->update($request->validated());

        return $this->responseSuccess('ProduitVente updated Successfully', new ProduitVenteResource($produitVente));
    }

    public function destroy(ProduitVente $produitVente): JsonResponse
    {
        $produitVente->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $produitVente = ProduitVente::onlyTrashed()->findOrFail($id);

        $produitVente->restore();

        return $this->responseSuccess('ProduitVente restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $produitVente = ProduitVente::withTrashed()->findOrFail($id);

        $produitVente->forceDelete();

        return $this->responseDeleted();
    }
}
