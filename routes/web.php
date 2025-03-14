<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {

//     return view('welcome');
// });
Route::view("/", 'welcome');

Route::get('test', function () {

    // Mail::to("darkjoker@gmail.com")->send(new JobPosted());
    // dispatch(function () {
    //     logger("Hello from the depths of darkness");
    // });

    $job = Job::first();
    TranslateJob::dispatch($job);

    return "Done";

    return new JobPosted();
});

// Jobs 
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', "index")->middleware('auth');
    Route::get('/jobs/create', "create")->middleware('auth');
    Route::get('/jobs/{job}/edit', "edit")->middleware('auth')->can("edit", "job");
    Route::post("/jobs", "store")->middleware('auth');
    Route::get('/jobs/{job}', "show")->middleware('auth');
    Route::patch('/jobs/{job}', "update")->middleware('auth')->can("edit", "job");
    Route::delete('/jobs/{job}', "delete")->middleware('auth')->can("edit", "job");
});

// Route::resource('jobs', JobController::class);
// Route::resource('jobs', JobController::class, [
//     // "only" => ['index']
//     "except" => []
// ])->middleware(['auth', 'can:edit-job']);

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

// Auth

Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store']);

// Log In
Route::get("/login", [SessionController::class, 'create'])->name("login");
Route::post("/login", [SessionController::class, 'store']);
Route::post("/logout", [SessionController::class, 'destroy']);
