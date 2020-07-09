<?php

namespace App\Http\Controllers\Company;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;
use App\User;
use App\Job;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = User::find(Auth::id());
        $companies = $id->companies()->get();
        $jobs = $id->jobs()->paginate(5);
        return view('company.profile-company', compact('companies', 'jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {

        // $image = $request->file('image');
        // $logo = $request->file('logo');

        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);

        // $new_logo = rand() . '.' . $logo->getClientOriginalExtension();
        // $logo->move(public_path('images'), $new_logo);

        // $id = Auth::user()->id;
        // $form_data = array(
        //     'user_id' => $id,
        //     'name'       =>   $request->name,
        //     'address'        =>   $request->address,
        //     'profile'       =>   $request->profile,
        //     'logo'        =>   $new_logo,
        //     'image'            =>   $new_name,
        // );
        // Company::create($form_data);
        // return redirect()->route('companies.index')->with('success', 'Create Company Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.index', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyStoreRequest $request, $id)
    {
        $name_image = $request->hidden_image;
        $name_logo =  $request->hidden_logo;
        $image = $request->file('image');
        $logo = $request->file('logo');
        if($image != '' && $logo != '') {
            $request->validate([
                'name'       =>   'required',
                'career'       =>   'required',
                'address'        =>   'required',
                'profile'       =>   'required',
                'image'            =>   'image|max:2048',
                'logo'        =>   'image|max:2048',

            ]);
            $name_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $name_image);

            $name_logo = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images'), $name_logo);
        } else {
            $request->validate([
                'name'       =>   'required',
                'career'       =>   'required',
                'address'        =>   'required',
                'profile'       =>   'required',
            ]);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'career'       =>   $request->career,
            'address'        =>   $request->address,
            'profile'       =>   $request->profile,
            'image'            =>   $name_image,
            'logo'        =>   $name_logo,
            
        );

        Company::find($id)->update($form_data);
        return redirect()->route('companies.index')->with('success', 'Edit Company Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::find($id)->delete();
        return redirect()->route('companies.index')->with('success', 'Delete Company Success');
    }
}
