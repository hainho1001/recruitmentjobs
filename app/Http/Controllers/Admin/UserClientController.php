<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;


class UserClientController extends Controller
{
    public function index(){
    	$users = User::where('roles', '0')->paginate(10);
    	return view('admin.user-client.index', compact('users'));
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
        return redirect()->route('dashboard.users-client.index')->with('success', 'Delete Company Success');
    }
}
