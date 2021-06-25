<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Admin;
use Session;

class admincontroller extends Controller
{
    public function index(){
		return view('admin.login');
	}

	public function makeLogin(Request $request){
		$validator = Validator::make($request->all(),[
		'password' => 'required',
		'username' => 'required',]);

		if ($validator -> fails()){
		 return back()
			->withErrors($validator)
			->withInput();
		}

		$data = array(	
						'username' => $request->username,
						'password' => $request->password
					);
		
		if(Auth::guard('admin')->attempt($data)){
			return redirect('dashbord');
		}
		else{
			return back()->withErrors(['message'=>'invalid email or password']);
		}

		// $admin = admin::where('username',$request->username)->where('password',$request->password)->get()->toArray();
		
		// if($admin){
		// 	return redirect('dashbord');
		// }
		// else{
		// 	return back()->withErrors(['message'=>'invalid email or password']);
		// }

	}

		public function dashbord(){
			return view('admin.dashbord');
		}
}

