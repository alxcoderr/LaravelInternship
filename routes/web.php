<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
  $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

       $job =  Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

// Comments
        // This code here and the one on line  are the same thing.
        // \Illuminate\Support\Arr::first($jobs, function($jobs))
        // {
        //         return $jobs['id']= $id;
