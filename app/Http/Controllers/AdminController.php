<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
		
		$admin = new Admin;
		$admin->name = $data['name'];
		$admin->email = $data['email'];
		$admin->password = bcrypt($data['password']);
		$admin->save();
   
        return back()->with('message','You have successfully register.');

		}
	
		return view('admin.register');
	}
	
	public function login(Request $request){
	
		if(Session::get('Login') =='Yes'){
			return redirect('/admin/dashboard');
		}
	
		if($request->isMethod('post')){
			$data = $request->all();
			
			if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
				Session::put('Login', 'Yes');
				return redirect('/admin/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
		
		return view('admin.login');
	}
	
	public function admindashboard(Request $request){
		return view('admin.dashboard');
	}
	
	public function adminLogout(){
		Session::flush();
		return redirect('/admin/login');
	}
}
