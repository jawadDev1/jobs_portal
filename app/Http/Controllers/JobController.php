<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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

    public function edit(Job $job)
    {


        // if (Auth::guest()) {
        //     return redirect('/login');
        // };

        // $job = Job::find($id);

        // Gate::authorize("edit-job", $job);


        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }

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

        $job =  Job::create([

            "name" => request('name'),
            "title" => request('title'),
            "salary" => request("salary"),
            "employer_id" => 1,
        ]);

        Mail::to($job->employer->user)->queue(new JobPosted($job));
        // Mail::to($job->employer->user)->send(new JobPosted($job));


        return redirect('/jobs');
    }

    public function show(Job $job)
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
