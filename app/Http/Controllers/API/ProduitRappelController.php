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
use Illuminate\Support\Facades\Log;

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
        // dd($request->all());
        $produitRappel = ProduitRappel::create($request->validated());
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid() && str_starts_with($file->getMimeType(), 'image/')) {
                Log::info("dougg naa");
                $imagePath = $file->store("produitRappel", "public");
                $produitRappel->image = $imagePath;
                $produitRappel->save();
            }
        }

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
