<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;


class UserCompanyController extends Controller
{
    public function index(){
    	$users = User::where('roles', '2')->paginate(10);
    	return view('admin.user-company.index', compact('users'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('dashboard.users-company.index')->with('success', 'Delete Company Success');
    }
}
