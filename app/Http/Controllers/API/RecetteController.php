<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recette\UpdateRecetteRequest;
use App\Http\Requests\Recette\CreateRecetteRequest;
use App\Http\Resources\Recette\RecetteResource;
use App\Models\Recette;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class RecetteController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $recettes = Recette::useFilters()->dynamicPaginate();

        return RecetteResource::collection($recettes);
    }

    public function store(CreateRecetteRequest $request): JsonResponse
    {
        $recette = Recette::create($request->validated());

        return $this->responseCreated('Recette created successfully', new RecetteResource($recette));
    }

    public function show(Recette $recette): JsonResponse
    {
        return $this->responseSuccess(null, new RecetteResource($recette));
    }

    public function update(UpdateRecetteRequest $request, Recette $recette): JsonResponse
    {
        $recette->update($request->validated());

        return $this->responseSuccess('Recette updated Successfully', new RecetteResource($recette));
    }

    public function destroy(Recette $recette): JsonResponse
    {
        $recette->delete();

        return $this->responseDeleted();
    }

   
}
