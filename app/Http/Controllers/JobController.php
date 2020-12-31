<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Livewire\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JobController extends Controller
{
   public function index()
    {
        $jobs = Job::online()->latest()->get();

        return view('jobs.index', compact('jobs'));
    }
     public function show(Job $id)
    {
        return view('jobs.show',['job'=>$id]);
    }

    /*Ajouter mission*/ 
    public function store()
    {
        Job::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'attachment' => request('attach'),
            'status' => request('status'),
            'user_id' => request('user_id')
        ]);
        return redirect()->route('jobs.index');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Job $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
        // notify()->success("La mission <span class='badge badge-dark'>#$job->id</span> a bien été mise à jour.");
        return redirect()->route('jobs.index');
    }
}

