<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Auth;
use App\UserJob;
use App\Job;
class UserJobController extends Controller
{
    public function index($id)
    {
        $job = Job::find($id);
        $userjobs = $job->userjobs()->get();
        return view('company.user-job.index', compact('userjobs'));
    }
    public function show($id)
    {
        $userjob = UserJob::find($id);
        return view('company.user-job.show', compact('userjob'));
    }
    public function destroy($id)
    {
    	UserJob::find($id)->delete();
    	return back()->with('success', 'Delete User Job Success');
    }
}
