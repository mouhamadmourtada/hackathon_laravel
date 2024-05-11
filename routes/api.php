<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

// Route::controller(TodoController::class)->group(function () {
//     Route::get('todos', 'index');
//     Route::post('todo', 'store');
//     Route::get('todo/{id}', 'show');
//     Route::put('todo/{id}', 'update');
//     Route::delete('todo/{id}', 'destroy');
// });

Route::prefix('todos')->controller(TodoController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');

});

Route::middleware('auth:api')->group(function () {



    /*===========================
        =           etudiants           =
        =============================*/

        Route::apiResource('/etudiants', \App\Http\Controllers\API\EtudiantController::class);
        Route::group([
        'prefix' => 'etudiants',
        ], function() {
            Route::get('{id}/restore', [\App\Http\Controllers\API\EtudiantController::class, 'restore']);
            Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\EtudiantController::class, 'permanentDelete']);
        });
        /*=====  End of etudiants   ======*/
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/*===========================
=           typeStructures           =
=============================*/

Route::apiResource('/typeStructures', \App\Http\Controllers\API\TypeStructureController::class);

/*=====  End of typeStructures   ======*/

/*===========================
=           partenaires           =
=============================*/

Route::apiResource('/partenaires', \App\Http\Controllers\API\PartenaireController::class);

/*=====  End of partenaires   ======*/

/*===========================
=           structureSocials           =
=============================*/

Route::apiResource('/structureSocials', \App\Http\Controllers\API\StructureSocialController::class);

/*=====  End of structureSocials   ======*/

/*===========================
=           categories           =
=============================*/

Route::apiResource('/categories', \App\Http\Controllers\API\CategorieController::class);

/*=====  End of categories   ======*/

/*===========================
=           produits           =
=============================*/

Route::apiResource('/produits', \App\Http\Controllers\API\ProduitController::class);
Route::group([
   'prefix' => 'produits',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\ProduitController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\ProduitController::class, 'permanentDelete']);
});
/*=====  End of produits   ======*/

/*===========================
=           produitRappels           =
=============================*/

Route::apiResource('/produitRappels', \App\Http\Controllers\API\ProduitRappelController::class);
Route::group([
   'prefix' => 'produitRappels',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\ProduitRappelController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\ProduitRappelController::class, 'permanentDelete']);
});
/*=====  End of produitRappels   ======*/

/*===========================
=           produitVentes           =
=============================*/

Route::apiResource('/produitVentes', \App\Http\Controllers\API\ProduitVenteController::class);
Route::group([
   'prefix' => 'produitVentes',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\ProduitVenteController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\ProduitVenteController::class, 'permanentDelete']);
});
/*=====  End of produitVentes   ======*/

/*===========================
=           evenements           =
=============================*/

Route::apiResource('/evenements', \App\Http\Controllers\API\EvenementController::class);
Route::group([
   'prefix' => 'evenements',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\EvenementController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\EvenementController::class, 'permanentDelete']);
});
/*=====  End of evenements   ======*/

/*===========================
=           recettes           =
=============================*/

Route::apiResource('/recettes', \App\Http\Controllers\API\RecetteController::class);

/*=====  End of recettes   ======*/

/*===========================
=           recette_produits           =
=============================*/

Route::apiResource('/recette_produits', \App\Http\Controllers\API\Recette_produitController::class);
Route::group([
   'prefix' => 'recette_produits',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\Recette_produitController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\Recette_produitController::class, 'permanentDelete']);
});
/*=====  End of recette_produits   ======*/

/*===========================
=           paniers           =
=============================*/

Route::apiResource('/paniers', \App\Http\Controllers\API\PanierController::class);
Route::group([
   'prefix' => 'paniers',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\PanierController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\PanierController::class, 'permanentDelete']);
});
/*=====  End of paniers   ======*/

/*===========================
=           commandes           =
=============================*/

Route::apiResource('/commandes', \App\Http\Controllers\API\CommandeController::class);
Route::group([
   'prefix' => 'commandes',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CommandeController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CommandeController::class, 'permanentDelete']);
});
/*=====  End of commandes   ======*/

/*===========================
=           posteSocials           =
=============================*/

Route::apiResource('/posteSocials', \App\Http\Controllers\API\PosteSocialController::class);
Route::group([
   'prefix' => 'posteSocials',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\PosteSocialController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\PosteSocialController::class, 'permanentDelete']);
});
/*=====  End of posteSocials   ======*/

/*===========================
=           prefs           =
=============================*/

Route::apiResource('/prefs', \App\Http\Controllers\API\PrefController::class);
Route::group([
   'prefix' => 'prefs',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\PrefController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\PrefController::class, 'permanentDelete']);
});
/*=====  End of prefs   ======*/

/*===========================
=           paiements           =
=============================*/

Route::apiResource('/paiements', \App\Http\Controllers\API\PaiementController::class);
Route::group([
   'prefix' => 'paiements',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\PaiementController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\PaiementController::class, 'permanentDelete']);
});
/*=====  End of paiements   ======*/
