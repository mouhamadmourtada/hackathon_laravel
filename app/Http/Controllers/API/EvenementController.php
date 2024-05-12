<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evenement\UpdateEvenementRequest;
use App\Http\Requests\Evenement\CreateEvenementRequest;
use App\Http\Resources\Evenement\EvenementResource;
use App\Models\Evenement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class EvenementController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $evenements = Evenement::useFilters()->dynamicPaginate();

        return EvenementResource::collection($evenements);
    }

    public function store(CreateEvenementRequest $request): JsonResponse
    {
        $evenement = Evenement::create($request->validated());

        return $this->responseCreated('Evenement created successfully', new EvenementResource($evenement));
    }

    public function show(Evenement $evenement): JsonResponse
    {
        return $this->responseSuccess(null, new EvenementResource($evenement));
    }

    public function update(UpdateEvenementRequest $request, Evenement $evenement): JsonResponse
    {
        $evenement->update($request->validated());

        return $this->responseSuccess('Evenement updated Successfully', new EvenementResource($evenement));
    }

    public function destroy(Evenement $evenement): JsonResponse
    {
        $evenement->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $evenement = Evenement::onlyTrashed()->findOrFail($id);

        $evenement->restore();

        return $this->responseSuccess('Evenement restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $evenement = Evenement::withTrashed()->findOrFail($id);

        $evenement->forceDelete();

        return $this->responseDeleted();
    }
}
