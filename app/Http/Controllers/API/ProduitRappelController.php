<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitRappel\UpdateProduitRappelRequest;
use App\Http\Requests\ProduitRappel\CreateProduitRappelRequest;
use App\Http\Resources\ProduitRappel\ProduitRappelResource;
use App\Models\ProduitRappel;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProduitRappelController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $produitRappels = ProduitRappel::useFilters()->dynamicPaginate();

        return ProduitRappelResource::collection($produitRappels);
    }

    public function store(CreateProduitRappelRequest $request): JsonResponse
    {
        $produitRappel = ProduitRappel::create($request->validated());

        return $this->responseCreated('ProduitRappel created successfully', new ProduitRappelResource($produitRappel));
    }

    public function show(ProduitRappel $produitRappel): JsonResponse
    {
        return $this->responseSuccess(null, new ProduitRappelResource($produitRappel));
    }

    public function update(UpdateProduitRappelRequest $request, ProduitRappel $produitRappel): JsonResponse
    {
        $produitRappel->update($request->validated());

        return $this->responseSuccess('ProduitRappel updated Successfully', new ProduitRappelResource($produitRappel));
    }

    public function destroy(ProduitRappel $produitRappel): JsonResponse
    {
        $produitRappel->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $produitRappel = ProduitRappel::onlyTrashed()->findOrFail($id);

        $produitRappel->restore();

        return $this->responseSuccess('ProduitRappel restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $produitRappel = ProduitRappel::withTrashed()->findOrFail($id);

        $produitRappel->forceDelete();

        return $this->responseDeleted();
    }
}
