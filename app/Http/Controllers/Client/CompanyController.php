<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;
use App\User;
use App\Job;
use Auth;


class CompanyController extends Controller
{
    public function index(){
    	// $companies = DB::table('companies')
     //            ->limit(5)
     //            ->get();
    	$companies = Company::paginate(9);
    	return view('client.company.index', compact('companies'));
    }


    public function show($id){
    	//$company = Company::find($id);
        $company = Company::getCompanyByID($id);
    	return view('client.company.show', compact('company'));
    }
}
