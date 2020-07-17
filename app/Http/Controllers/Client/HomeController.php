<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;
use App\Job;

class HomeController extends Controller
{
    public function index() {
    	$companiess = Company::take(6)->get();
    	$companieso = Company::inRandomOrder()->limit(2)->get();
    	$companiest = Company::inRandomOrder()->limit(12)->get();
    	$jobs = Job::inRandomOrder()->limit(10)->get();
    	$sugjobs= Job::orderBy('id', 'desc')->get();
    	$slide = Company::take(3)->get();
    	return view('client.index', compact('companiess', 'companieso', 'companiest', 'jobs', 'sugjobs', 'slide'));
    }
}
