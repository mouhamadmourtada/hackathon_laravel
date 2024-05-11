<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panier\UpdatePanierRequest;
use App\Http\Requests\Panier\CreatePanierRequest;
use App\Http\Resources\Panier\PanierResource;
use App\Models\Panier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PanierController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $paniers = Panier::useFilters()->dynamicPaginate();

        return PanierResource::collection($paniers);
    }

    public function store(CreatePanierRequest $request): JsonResponse
    {
        $panier = Panier::create($request->validated());

        return $this->responseCreated('Panier created successfully', new PanierResource($panier));
    }

    public function show(Panier $panier): JsonResponse
    {
        return $this->responseSuccess(null, new PanierResource($panier));
    }

    public function update(UpdatePanierRequest $request, Panier $panier): JsonResponse
    {
        $panier->update($request->validated());

        return $this->responseSuccess('Panier updated Successfully', new PanierResource($panier));
    }

    public function destroy(Panier $panier): JsonResponse
    {
        $panier->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $panier = Panier::onlyTrashed()->findOrFail($id);

        $panier->restore();

        return $this->responseSuccess('Panier restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $panier = Panier::withTrashed()->findOrFail($id);

        $panier->forceDelete();

        return $this->responseDeleted();
    }
}
