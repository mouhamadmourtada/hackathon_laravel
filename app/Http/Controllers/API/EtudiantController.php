<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Etudiant\UpdateEtudiantRequest;
use App\Http\Requests\Etudiant\CreateEtudiantRequest;
use App\Http\Resources\Etudiant\EtudiantResource;
use App\Models\Etudiant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;


class EtudiantController extends Controller
{

    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $etudiants = Etudiant::useFilters()->dynamicPaginate();

        return EtudiantResource::collection($etudiants);
    }

    public function store(CreateEtudiantRequest $request): JsonResponse
    {
        $etudiant = Etudiant::create($request->validated());

        return $this->responseCreated('Etudiant created successfully', new EtudiantResource($etudiant));
    }

    public function show(Etudiant $etudiant): JsonResponse
    {
        return $this->responseSuccess(null, new EtudiantResource($etudiant));
    }

    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant): JsonResponse
    {
        $etudiant->update($request->validated());

        return $this->responseSuccess('Etudiant updated Successfully', new EtudiantResource($etudiant));
    }

    public function destroy(Etudiant $etudiant): JsonResponse
    {
        $etudiant->delete();

        return $this->responseDeleted("etudiant supprimé avec succés");
    }

   public function restore($id): JsonResponse
    {
        $etudiant = Etudiant::onlyTrashed()->findOrFail($id);

        $etudiant->restore();

        return $this->responseSuccess('Etudiant restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $etudiant = Etudiant::withTrashed()->findOrFail($id);

        $etudiant->forceDelete();

        return $this->responseDeleted();
    }
}
