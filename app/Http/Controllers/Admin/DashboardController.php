<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
    	// $users = User::doesntHave('company')->get();
    	// foreach ($users as $user) {
    	// 	echo $user->id . ':' . $user->email . '<br />';
    	// }
    	return view('admin.dashboard');
    }
}
