<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::all();
        // $jobs = Job::with("employer")->get();
        $jobs = Job::with("employer")->latest()->paginate(8);
        // $jobs = Job::with("employer")->simplePaginate(2);
        // $jobs = Job::with("employer")->cursorPaginate(2);

        return view('jobs.index', ["jobs" => $jobs]);
    }

    public function create()
    {
        return view("jobs.create");
    }

    public function edit($id)
    {
        $job = Job::find($id);

        return view("jobs.edit", ["job" => $job]);
    }

    public function store()
    {
        // dd(request('title'));
        // dd(request()->all());
        request()->validate([
            "title" => ['required', 'min:3'],
            "salary" => ['required'],
            "name" => ['required'],
        ]);

        Job::create([

            "name" => request('name'),
            "title" => request('title'),
            "salary" => request("salary"),
            "employer_id" => 1,
        ]);


        return redirect('/jobs');
    }

    public function show($job)
    {
        // $job = Job::find($id);

        return view('jobs.show', ["job" => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            "title" => ['required', 'min:3'],
            "salary" => ['required'],
            "name" => ['required'],
        ]);


        // $job = Job::findOrFail($id);

        $job->update([
            "name" => request('name'),
            "title" => request('title'),
            "salary" => request('salary'),
        ]);

        return redirect("/jobs/" . $job->id);
    }

    public function delete(Job $job)
    {
        // dd(Job::findOrFail($id));
        // Job::findOrFail($id)->delete();
        $job->delete();

        return redirect("/jobs");
    }
}
