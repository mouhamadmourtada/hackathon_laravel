<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pref\UpdatePrefRequest;
use App\Http\Requests\Pref\CreatePrefRequest;
use App\Http\Resources\Pref\PrefResource;
use App\Models\Pref;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class PrefController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $prefs = Pref::useFilters()->dynamicPaginate();

        return PrefResource::collection($prefs);
    }

    public function store(CreatePrefRequest $request): JsonResponse
    {
        $pref = Pref::create($request->validated());

        return $this->responseCreated('Pref created successfully', new PrefResource($pref));
    }

    public function show(Pref $pref): JsonResponse
    {
        return $this->responseSuccess(null, new PrefResource($pref));
    }

    public function update(UpdatePrefRequest $request, Pref $pref): JsonResponse
    {
        $pref->update($request->validated());

        return $this->responseSuccess('Pref updated Successfully', new PrefResource($pref));
    }

    public function destroy(Pref $pref): JsonResponse
    {
        $pref->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $pref = Pref::onlyTrashed()->findOrFail($id);

        $pref->restore();

        return $this->responseSuccess('Pref restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $pref = Pref::withTrashed()->findOrFail($id);

        $pref->forceDelete();

        return $this->responseDeleted();
    }
}
