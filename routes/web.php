<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {

//     return view('welcome');
// });
Route::view("/", 'welcome');

// Jobs 
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', "index");
//     Route::get('/jobs/create', "create");
//     Route::get('/jobs/{id}/edit', "edit");
//     Route::post("/jobs", "store");
//     Route::get('/jobs/{job}', "show");
//     Route::patch('/jobs/{job}', "update");
//     Route::delete('/jobs/{job}', "delete");
// });

// Route::resource('jobs', JobController::class);
Route::resource('jobs', JobController::class, [
    // "only" => ['index']
    "except" => []
]);

Route::get('/contact', function () {
    return view('contact.index', ["email" => "luffy@gmail.com"]);
});




Route::get('/teas', function () {
    $teas = [
        ["name" => "Monkey D. Luffy", "age" => "19", "id" => 1],
        ["name" => "Uzumaki Naruto", "age" => "21", "id" => 2],
        ["name" => "Eren Yeager", "age" => "22", "id" => 3],
    ];


    return view('teas.index', ["teas" => $teas]);
});
