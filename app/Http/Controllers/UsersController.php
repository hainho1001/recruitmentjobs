<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class UsersController extends Controller
{
    function list(){
    	$user = Company::all();
        return response()->json(['success' => $user], 200); 
    }
}
