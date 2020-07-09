<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;


class CompanyController extends Controller
{
    public function index(){
    	$companies = Company::latest()->paginate(10);
    	return view('admin.company.index', compact('companies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('admin.company.show', compact('company'));
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
        return redirect()->route('dashboard.companies.index')->with('success', 'Delete Company Success');
    }
}
