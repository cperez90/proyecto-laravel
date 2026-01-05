<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//index
Route::get('/jobs', [JobController::class, 'index']);

//create
Route::get('/jobs/create', function (){
});

//show
Route::get('/jobs/{job}', function (Job $job) {

});

//Store
Route::post('/jobs', function() {

});

//Edit
Route::get('/jobs/{job}/edit', function (Job $job) {

});

// Update
Route::patch('/jobs/{job}', function (Job $job) {

});

// Destroy
Route::delete('/jobs/{job}', function (Job $job) {

});

Route::get('/contact', function () {
    return view('contact');
});
