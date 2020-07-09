<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Job;
use App\User;
use App\UserJob;
use Auth;

class JobController extends Controller
{
    public function index(){
    	$jobs = Job::latest()->paginate(20);
    	return view('client.job.index', compact('jobs'));
    }

    public function show($id) {
    	$job = Job::find($id);
    	$jobs = Job::take(10)->get();
    	$checkRegistJob = false;

    	if(Auth::check()){
	    	$userID = Auth::user()->id;
	    	// $userJob = new UserJob();
	    	// $checkRegistJob = $userJob->checkRegistJob($userID, $id);
	    	$checkRegistJob = UserJob::checkRegistJob($userID, $id);
	    	
    	}
    	return view('client.job.show', compact('job', 'jobs', 'checkRegistJob'));
    }
}
