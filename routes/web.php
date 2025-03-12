<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/jobs', function () {


    return view('jobs.index', ["jobs" => Job::all()]);
});



Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ["job" => $job]);
});


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
