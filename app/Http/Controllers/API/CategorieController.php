<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorie\UpdateCategorieRequest;
use App\Http\Requests\Categorie\CreateCategorieRequest;
use App\Http\Resources\Categorie\CategorieResource;
use App\Models\Categorie;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategorieController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $categories = Categorie::useFilters()->dynamicPaginate();

        return CategorieResource::collection($categories);
    }

    public function store(CreateCategorieRequest $request): JsonResponse
    {
        $categorie = Categorie::create($request->validated());

        return $this->responseCreated('Categorie created successfully', new CategorieResource($categorie));
    }

    public function show(int $categorie): JsonResponse
    {
        try {   
            $categorie = Categorie::find($categorie);
        } catch (\Throwable $th) {
            return $this->responseNotFound();
        }
        return $this->responseSuccess(null, new CategorieResource($categorie));
    }

    public function update(UpdateCategorieRequest $request, int $categorie): JsonResponse
    {
        try {
            $categorie = Categorie::find($categorie)->update($request->validated());
        } catch (\Throwable $th) {
            return $this->responseNotFound('Categorie not found');
        }
        
        return $this->responseSuccess('Categorie updated Successfully');
    }

    public function destroy(int $categorie): JsonResponse
    {
        $categorie = Categorie::find($categorie)->delete();

        return $this->responseDeleted("Categorie supprimé avec succés");
    }

   
}
