<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('test', function () {
    return (Job::all());
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs'=>Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {

    // $job = Arr::first(Job::allJobs(), 
    //    fn($job) => $job['id'] == $id, 
    //    fn() => abort(404));

    $job = Job::find($id);

    return view('job', ['job'=> $job]);
});
