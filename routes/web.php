<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Eager load employer and tags for jobs list (with pagination)
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer', 'tags')->paginate(10)
    ]);
});

// Also eager load employer and tags for individual job view
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::with('employer', 'tags')->findOrFail($id),
    ]);
});
