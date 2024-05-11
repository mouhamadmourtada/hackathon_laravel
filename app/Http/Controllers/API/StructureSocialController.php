<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StructureSocial\UpdateStructureSocialRequest;
use App\Http\Requests\StructureSocial\CreateStructureSocialRequest;
use App\Http\Resources\StructureSocial\StructureSocialResource;
use App\Models\StructureSocial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StructureSocialController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $structureSocials = StructureSocial::useFilters()->dynamicPaginate();

        return StructureSocialResource::collection($structureSocials);
    }

    public function store(CreateStructureSocialRequest $request): JsonResponse
    {
        $structureSocial = StructureSocial::create($request->validated());

        return $this->responseCreated('StructureSocial created successfully', new StructureSocialResource($structureSocial));
    }

    public function show(StructureSocial $structureSocial): JsonResponse
    {
        return $this->responseSuccess(null, new StructureSocialResource($structureSocial));
    }

    public function update(UpdateStructureSocialRequest $request, StructureSocial $structureSocial): JsonResponse
    {
        $structureSocial->update($request->validated());

        return $this->responseSuccess('StructureSocial updated Successfully', new StructureSocialResource($structureSocial));
    }

    public function destroy(StructureSocial $structureSocial): JsonResponse
    {
        $structureSocial->delete();

        return $this->responseDeleted();
    }

   
}
