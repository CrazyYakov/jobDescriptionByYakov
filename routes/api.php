<?php

use App\JobPosition;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getInstitutJobs', function (Request $request) {
    if ($request['institutId']) {
        return JobPosition::where('inst_id', $request['institutId'])->get();    
    }
    
    return response(['message' => 'Bad Request', 'code' => 400], 400);
});