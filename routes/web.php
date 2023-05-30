<?php

use App\Http\Controllers\BazmaController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("example", function() {
    return "Example route get";
});

Route::get("coba", function() {
    return view("coba", ['nama' => 'Ardian Arya']);
});

Route::get("/example/{exampled}", function($exampleId) {
    return "Example number : $exampleId";
});

Route::get("/posts/{postId}/comments/{commnentsId}", function($postId, $commentsId) {
    return "Ini post ke : $postId dan commnents ke : $commentsId";
});

Route::get("post/{postsId?}", function($postId = null) {
    return "post opsional : $postId";
});

Route::get("/coba/example", [CobaController::class, "example"]);

Route::get("/coba/request", [CobaController::class, "request"]);

Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);

Route::get("/response/index", [BazmaController::class, 'responseFunction']);
Route::get("/response/header", [BazmaController::class, 'responseHeader']);

Route::get("/enkripsi/code", [BazmaController::class, 'encryptionData']);

Route::get("/redirect/to", [BazmaController::class, 'redirectTo']);
Route::get("/redirect/from", [BazmaController::class, 'redirectFrom']);

Route::get("/redirect/to/named", [BazmaController::class, 'redirectToNamedRoute'])->name("redirect.from");
Route::get("/redirect/from/named", [BazmaController::class, 'redirectFromNamedRoute']);
