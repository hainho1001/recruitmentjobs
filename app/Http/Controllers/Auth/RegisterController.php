<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;
use Auth;
use App\User;
use App\Company;

class RegisterController extends Controller
{
    public function getRegister(){
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
            return view('auth.register');
        }
    }
    public function registerCompany() {
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
            return view('auth.register-company');
        }
    }

     public function postRegister(RegisterRequest $request)
    {
        $user = User::create($request->all());
        // $user = User::create(request(
        // 	['name', 'phone', 'roles', 'email', 'password']
        // ));

        auth()->login($user);

        if (Auth::check()) {
            if(Auth::user()->roles== 1){
                return redirect('dashboard.index');
            }
            elseif (Auth::user()->roles== 2) {
                $id = Auth::user()->id;
                $form_data = array(
                    'user_id' => $id,
                    'logo' => $request->logo,
                    'image' => $request->image,
                    'name'       =>   $request->name_company,
                    'career'       =>   $request->career,
                    'address'       =>   $request->address,
                );
                $companies = Company::create($form_data);
                return redirect('company-profile/companies');
            }
            else {
                return redirect('/');
            }
        }
    }
}
