<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partenaire\UpdatePartenaireRequest;
use App\Http\Requests\Partenaire\CreatePartenaireRequest;
use App\Http\Resources\Partenaire\PartenaireResource;
use App\Models\Partenaire;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class PartenaireController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $partenaires = Partenaire::useFilters()->dynamicPaginate();

        return PartenaireResource::collection($partenaires);
    }

    public function store(CreatePartenaireRequest $request): JsonResponse
    {
        $partenaire = Partenaire::create($request->validated());

        return $this->responseCreated('Partenaire created successfully', new PartenaireResource($partenaire));
    }

    public function show(Partenaire $partenaire): JsonResponse
    {
        return $this->responseSuccess(null, new PartenaireResource($partenaire));
    }

    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire): JsonResponse
    {
        $partenaire->update($request->validated());

        return $this->responseSuccess('Partenaire updated Successfully', new PartenaireResource($partenaire));
    }

    public function destroy(Partenaire $partenaire): JsonResponse
    {
        $partenaire->delete();

        return $this->responseDeleted();
    }

   
}
