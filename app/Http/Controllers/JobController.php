<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer', 'tags')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        $employers = Employer::all();
        return view('jobs.create', ['employers' => $employers]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ['required', 'exists:employers,id'],
        ]);

        Job::create($attributes);

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        $employers = Employer::all();
        return view('jobs.edit', ['job' => $job, 'employers' => $employers]);
    }

    public function update(Request $request, Job $job)
    {
        $attributes = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ['required', 'exists:employers,id'],
        ]);

        $job->update($attributes);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
