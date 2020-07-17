<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request; 
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller; 
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public $successStatus = 200;

	/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    {
    		$input = $request->all(); 
	        $user = User::create($input); 
	        $token =  $user->createToken('MyApp')-> accessToken;
			return response()->json([
				'success'=> true,
				'token' => $token,
				'user' => $user
			], $this-> successStatus); 
    	
		
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
            $token =  $user->createToken('MyApp')-> accessToken; 
            return response()->json([
            	'success' => true,
            	'token' => $token,
            	'user' => $user
            ], $this-> successStatus); 
	        
        } 
        else{ 
            return response()->json(['success'=>false], 401); 
        } 
    }
/** 
     * saveuserinfo api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
     public function saveuserinfo(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $photo = '';
        if($request->photo!= ''){
            $photo= time().'.jpg';
            file_put_contents('profiles/'.$photo, base64_decode($request->photo));
            $user->photo=$photo;
        }
        $user->update();
        return response()->json([
            'success' => true,
            'photo' =>$photo
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
