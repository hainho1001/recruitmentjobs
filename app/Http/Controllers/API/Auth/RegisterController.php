<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request; 
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class RegisterController extends Controller
{
	public $successStatus = 200;

	/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(RegisterRequest $request) 
    { 
  //       $validator = Validator::make($request->all(), [ 
  //           'name' => 'required', 
  //           'email' => 'required|email|unique:users', 
  //           'password' => 'required', 
  //           'c_password' => 'required|same:password', 
  //       ]);
		// if ($validator->fails()) { 
		//             return response()->json(['error'=>$validator->errors()], 401);            
		//         }
				$input = $request->all(); 
		        $user = User::create($input); 
		        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
		        // $success['name'] =  $user->name;
		return response()->json(['success'=>$success], $this-> successStatus); 
	}
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(LoginRequest $request)
    {
    	
    	$login = [
			'email' => $request->email,
			'password' => $request->password
		];
        if(Auth::attempt($login)){
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
	        
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}
