<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserJobRequest;
use Illuminate\Http\Request;

use App\User;
use App\Job;
use App\UserJob;

use Auth;

class UserJobController extends Controller
{
    public function index($id){
    	$job = Job::find($id);
    	$user = User::find(Auth::id());

        $userID = Auth::user()->id;
        $checkRegistJob = UserJob::checkRegistJob($userID, $id);

        return view('client.user-job.index', compact('job', 'user', 'checkRegistJob'));
    }
    public function postResume(UserJobRequest $request, $id){
    	$userID = Auth::user()->id;
    	$jobID = Job::find($id)->id;

    	$resume = $request->file('resume');
        $new_resume = rand() . '.' . $resume->getClientOriginalExtension();
        $resume->move(public_path('files'), $new_resume);

    	$form_data = array(
            'user_id' => $userID,
            'job_id'  =>  $jobID,
            'phone'   => $request->phone,
            'cv'      =>   $new_resume
        );
        UserJob::create($form_data);

        return back()->with('status', 'Hồ sơ của bạn đã được gửi thành công đến nhà tuyển dụng');
    }
}
