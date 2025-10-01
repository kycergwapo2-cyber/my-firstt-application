<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;

Route::get('/', function () {
    return view('home');
});

// ✅ Show Create Job Form (must come BEFORE /jobs/{job})
Route::get('/jobs/create', function () {
    return view('jobs.create', [
        'employers' => Employer::all()
    ]);
});

// ✅ Store New Job
Route::post('/jobs', function () {
    $attributes = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'employer_id' => ['required', 'exists:employers,id']
    ]);

    Job::create($attributes);

    return redirect('/jobs');
});

// ✅ Jobs Index Page
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer', 'tags')->paginate(10),
    ]);
});

// ✅ Show Single Job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// ✅ Show Edit Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', [
        'job' => $job,
        'employers' => Employer::all()
    ]);
});

// ✅ Update Job
Route::patch('/jobs/{job}', function (Job $job) {
    $attributes = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'employer_id' => ['required', 'exists:employers,id']
    ]);

    $job->update($attributes);

    return redirect('/jobs/' . $job->id);
});

// ✅ Delete Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();

    return redirect('/jobs');
});
