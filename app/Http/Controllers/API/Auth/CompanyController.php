<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use App\Job;

class CompanyController extends Controller
{
    public function index(){
    	$companies = Company::orderBy('id', 'desc')->get();
    	return response()->json([
            'success' => true,
            'companies' =>$companies
        ]);
    }
    public function slider(){
        $slider = Company::inRandomOrder()->limit(3)->get();
        return response()->json([
            'success' => true,
            'slider' =>$slider
        ]);
    }
    public function indexx(){
    	$jobs = Job::orderBy('id', 'desc')->get();
    	foreach ($jobs as $job) {
    		$job->company;
    	}
    	return response()->json([
            'success' => true,
            'job' =>$jobs
        ]);
    }
    
}
