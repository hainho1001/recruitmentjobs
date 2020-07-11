<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class User extends Controller
{
    function list(){
    	return User::all();
    }
}
