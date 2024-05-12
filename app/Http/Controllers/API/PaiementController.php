<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Paiement\UpdatePaiementRequest;
use App\Http\Requests\Paiement\CreatePaiementRequest;
use App\Http\Resources\Paiement\PaiementResource;
use App\Models\Paiement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class PaiementController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $paiements = Paiement::useFilters()->dynamicPaginate();

        return PaiementResource::collection($paiements);
    }

    public function store(CreatePaiementRequest $request): JsonResponse
    {
        $paiement = Paiement::create($request->validated());

        return $this->responseCreated('Paiement created successfully', new PaiementResource($paiement));
    }

    public function show(Paiement $paiement): JsonResponse
    {
        return $this->responseSuccess(null, new PaiementResource($paiement));
    }

    public function update(UpdatePaiementRequest $request, Paiement $paiement): JsonResponse
    {
        $paiement->update($request->validated());

        return $this->responseSuccess('Paiement updated Successfully', new PaiementResource($paiement));
    }

    public function destroy(Paiement $paiement): JsonResponse
    {

        $paiement->delete();
        
        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $paiement = Paiement::onlyTrashed()->findOrFail($id);

        $paiement->restore();

        return $this->responseSuccess('Paiement restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $paiement = Paiement::withTrashed()->findOrFail($id);

        if (!$paiement) {
            return $this->responseError();
        }
        
        $paiement->forceDelete();

        return $this->responseDeleted();
    }
}
