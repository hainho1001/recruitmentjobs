<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Job;

class JobController extends Controller
{
    public function index() {
    	$jobs = Job::latest()->paginate(10);
    	return view('admin.job.index', compact('jobs'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('admin.job.show', compact('job'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect()->route('dashboard.jobs.index')->with('success', 'Delete Company Success');
    }
}
