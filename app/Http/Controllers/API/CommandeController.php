<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Commande\UpdateCommandeRequest;
use App\Http\Requests\Commande\CreateCommandeRequest;
use App\Http\Resources\Commande\CommandeResource;
use App\Models\Commande;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CommandeController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $commandes = Commande::useFilters()->dynamicPaginate();

        return CommandeResource::collection($commandes);
    }

    public function store(CreateCommandeRequest $request): JsonResponse
    {
        $commande = Commande::create($request->validated());

        return $this->responseCreated('Commande created successfully', new CommandeResource($commande));
    }

    public function show(Commande $commande): JsonResponse
    {
        return $this->responseSuccess(null, new CommandeResource($commande));
    }

    public function update(UpdateCommandeRequest $request, Commande $commande): JsonResponse
    {
        $commande->update($request->validated());

        return $this->responseSuccess('Commande updated Successfully', new CommandeResource($commande));
    }

    public function destroy(Commande $commande): JsonResponse
    {
        $commande->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $commande = Commande::onlyTrashed()->findOrFail($id);

        $commande->restore();

        return $this->responseSuccess('Commande restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $commande = Commande::withTrashed()->findOrFail($id);

        $commande->forceDelete();

        return $this->responseDeleted();
    }
}
