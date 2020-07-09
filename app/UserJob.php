<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
	protected $fillable = [
		'user_id', 'job_id', 'phone', 'cv'
	];
	
	public function user() {
		return $this->belongsTo(User::class);
	}

	public function job() {
		return $this->belongsTo(Job::class);
	}

	public static function checkRegistJob($userID, $jobID)
	{
		$userJob = self::where('user_id', $userID)->where('job_id', $jobID)->first();
		return !empty($userJob) ? true : false;
	}
}
