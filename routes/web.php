<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

       $job =  Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});





// Comments
        // This code here and the one on line  are the same thing.
        // \Illuminate\Support\Arr::first($jobs, function($jobs))
        // {
        //         return $jobs['id']= $id;
