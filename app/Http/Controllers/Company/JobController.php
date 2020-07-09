<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\JobRequest;

use App\Job;
use App\Company;
use App\User;
use Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = User::find(Auth::id());
        $jobs = $id->jobs()->paginate(5);
        return view('company.job.index', compact('jobs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {

        $id = Auth::user()->id;
        $company = Company::where('user_id', $id)->first();
        $companyID = $company->id;
        $form_data = array(
            'user_id' => $id,
            'company_id' => $companyID,
            'title'       =>   $request->title,
            'level'       =>   $request->level,
            'career'       =>   $request->career,
            'address'        =>   $request->address,
            'description'       =>   $request->description,
            'requirements'        =>   $request->requirements,
            'salary'            =>   $request->salary
        );

        Job::create($form_data);
        return redirect()->route('jobs.index')->with('success', 'Create Company Success');
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
        return view('company.job.show', compact('job'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('company.job.edit', compact('job'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $form_data = array(
            'title'       =>   $request->title,
            'level'       =>   $request->level,
            'career'       =>   $request->career,
            'address'        =>   $request->address,
            'description'       =>   $request->description,
            'requirements'        =>   $request->requirements,
            'employment'            =>   $request->employment
        );
        Job::find($id)->update($form_data);
        return redirect()->route('jobs.index')->with('success', 'Edit Company Success');
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
        return redirect()->route('jobs.index')->with('success', 'Delete Company Success');
    }
}
