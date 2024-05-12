<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PosteSocial\UpdatePosteSocialRequest;
use App\Http\Requests\PosteSocial\CreatePosteSocialRequest;
use App\Http\Resources\PosteSocial\PosteSocialResource;
use App\Models\PosteSocial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Essa\APIToolKit\Api\ApiResponse;

class PosteSocialController extends Controller
{
    use ApiResponse;
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $posteSocials = PosteSocial::useFilters()->dynamicPaginate();

        return PosteSocialResource::collection($posteSocials);
    }

    public function store(CreatePosteSocialRequest $request): JsonResponse
    {
        $posteSocial = PosteSocial::create($request->validated());

        return $this->responseCreated('PosteSocial created successfully', new PosteSocialResource($posteSocial));
    }

    public function show(PosteSocial $posteSocial): JsonResponse
    {
        return $this->responseSuccess(null, new PosteSocialResource($posteSocial));
    }

    public function update(UpdatePosteSocialRequest $request, PosteSocial $posteSocial): JsonResponse
    {
        $posteSocial->update($request->validated());

        return $this->responseSuccess('PosteSocial updated Successfully', new PosteSocialResource($posteSocial));
    }

    public function destroy(PosteSocial $posteSocial): JsonResponse
    {
        $posteSocial->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $posteSocial = PosteSocial::onlyTrashed()->findOrFail($id);

        $posteSocial->restore();

        return $this->responseSuccess('PosteSocial restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $posteSocial = PosteSocial::withTrashed()->findOrFail($id);

        $posteSocial->forceDelete();

        return $this->responseDeleted();
    }
}
