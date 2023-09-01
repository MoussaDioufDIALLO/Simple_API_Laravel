<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;

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

Route::middleware('auth:api')->get('/user', function (Request $request)
{
    return $request->user();
});
Route::get("flist{}", [DeviceController::class,'flist']);
Route::get("flistas/{id?}", [DeviceController::class,'flistas']);
Route::post("add", [DeviceController::class,'add']);
Route::put("update",[DeviceController::class,'update']);
Route::delete("delete/{id}", [DeviceController::class, 'delete']);
Route::get("search/{name}",[DeviceController::class,'search']);
Route::post("save", [DeviceController::class, 'testData']);
//Resource
Route::apiResource("member", MemberController::class);

