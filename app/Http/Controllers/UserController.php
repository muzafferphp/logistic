<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Admin;
use App\Models\Carrier;
use Auth;
use Hash;
use Session;
class UserController extends Controller
{
    public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				//'mobile' => 'required|min:11|numeric',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email|unique:carriers,email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
		
		$user = new User;
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->mobile = $data['mobile'];
		$user->password = bcrypt($data['password']);
		$user->save();
   
        return back()->with('message','You have successfully register.');

		}
	
		return view('user.register');
	}
	
	public function login(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/user/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		return view('user.login');
	}
	
	public function userdashboard(Request $request){
		return view('user.dashboard');
	}
	
	public function userLogout(){
		Session::flush();
		return redirect('/user/login');
	}
	public function passwordForget(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			
			$password = Str::random(8);
			$random_password = Hash::make($password);
			
			$email = $data['email'];
			
			$checkEmail = User::where('email',$email)->count();
		
			
			if($checkEmail >0){
			
				$users = User::where('email',$email)->first();
			
				User::where('email', $email)->update(['password' => $random_password]);
				$messageData = ['email'=>$data['email'],'name'=>$users->name,'password'=>$password];
				
				Mail::send('mail.forgetpassword',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				return redirect()->back()->with("success","Changed your password check your email !");
			
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('user.password');
	}
	
		
	public function profileUpdate(Request $request){
	
		$title = 'Profile Update';
		$id = Auth::user()->id;
		$user_details = User::find($id);
		
		if($request->isMethod('post')){
			$data = $request->all();
				$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$user_details->pic = $filename;
			}
			
			$user_details->name = $data['name'];
			$user_details->email = $data['email'];
			$user_details->mobile = $data['mobile'];
			$user_details->password = bcrypt($data['password']);
			$user_details->save();
			return back()->with('message','You have successfully updated.');
		}
		
		return view('user.profile_update')->with(['controller'=>'carrier','title'=>$title,'carrier_id'=>$id,'carrier_details'=>$user_details]);
		
	}
}
