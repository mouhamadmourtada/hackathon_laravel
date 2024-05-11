<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStructure\UpdateTypeStructureRequest;
use App\Http\Requests\TypeStructure\CreateTypeStructureRequest;
use App\Http\Resources\TypeStructure\TypeStructureResource;
use App\Models\TypeStructure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;



class TypeStructureController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $typeStructures = TypeStructure::useFilters()->dynamicPaginate();

        return TypeStructureResource::collection($typeStructures);
    }

    public function store(CreateTypeStructureRequest $request): JsonResponse
    {
        $typeStructure = TypeStructure::create($request->validated());

        return $this->responseCreated('TypeStructure created successfully', new TypeStructureResource($typeStructure));
    }

    public function show(int $typeStructureId): JsonResponse
    {
        try {
            
            $typeStructure = TypeStructure::find($typeStructureId);
        } catch (\Throwable $th) {
            return $this->responseNotFound('TypeStructure not found');
        }
        return $this->responseSuccess(null, new TypeStructureResource($typeStructure));
        // return $this->responseSuccess(null, new TypeStructureResource($typeStructure));
    }

    public function update(UpdateTypeStructureRequest $request, TypeStructure $typeStructure): JsonResponse
    {
        $typeStructure->update($request->validated());

        return $this->responseSuccess('TypeStructure updated Successfully', new TypeStructureResource($typeStructure));
    }

    public function destroy(TypeStructure $typeStructure): JsonResponse
    {
        $typeStructure->delete();

        return $this->responseDeleted();
    }

   
}
