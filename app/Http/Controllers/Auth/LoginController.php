<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use Auth;
use App\User;


class LoginController extends Controller
{

	public function getLogin() 
	{
		if (Auth::check()) {
			if(Auth::user()->roles== 1){
				return redirect('dashboard');
			}
			elseif (Auth::user()->roles== 2) {
				return redirect('company-profile/companies');
			}
			else {
				return redirect('/');
			}
		}
		else {
			return view('auth.login');
		}
	}


	public function postLogin(LoginRequest $request)
	{
		$backUrl = $request->backUrl;
		$login = [
			'email' => $request->txtEmail,
			'password' => $request->txtPassword
		];
		if(Auth::attempt($login)){
			if(Auth::user()->roles == 1){
				return redirect()->route('dashboard.index');
			}
			elseif(Auth::user()->roles == 2){
				return redirect()->route('companies.index');
			}
			else {
				return redirect($backUrl);
			}
		}
		else {
			return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
		}
	}

	public function getLogout(){
		Auth::logout();
		return redirect('/');
	}
}
