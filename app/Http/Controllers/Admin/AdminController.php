<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Carrier;
use App\Models\Admin;
use DB;


class AdminController extends Controller
{
     public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$admin = new Admin;
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

			]);
		
			 if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$admin->pic = $filename;
			}
		
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
	
	public function usersList(){
		$title = 'User list';
		$usersCarrier = Carrier::get()->toArray();
		$usersUser = User::get()->toArray();
		//$userslist = array_merge($usersCarrier,$usersUser);
		return view('admin.users_list',compact('usersCarrier','usersUser', 'title'));
	}
	
	public function carrierUpdate(Request $request,$id){
		$usersCarrier = Carrier::find($id);
		$title = "User update";
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
			
			$usersCarrier->name = $data['name'];
			$usersCarrier->email = $data['email'];
			$usersCarrier->mobile = $data['mobile'];
			$usersCarrier->password = bcrypt($data['password']);
			$usersCarrier->save();
			
			$email = $data['email'];
			$password = $data['password'];
			
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'password'=>$password];
			Mail::send('mail.userupdate',$messageData,function($message) use($email){
				$message->to($email)->subject('Updated details');
			});
			
			return back()->with('message','You have successfully user updated.');
		}
		return view('admin.users.carrier_update',compact('usersCarrier','title'));
		
	}
	
	public function carrierDelete(Request $request,$id){
		$carrier = Carrier::find($id)->delete();
		return redirect()->back()->with("success_carrier","Carrier record deleted !");
	}
	
	public function userUpdate(Request $request,$id){
		$users = User::find($id);
		$title = "User update";
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
			
			$users->name = $data['name'];
			$users->email = $data['email'];
			$users->mobile = $data['mobile'];
			$users->password = bcrypt($data['password']);
			$users->save();
			
			$email = $data['email'];
			$password = $data['password'];
			
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'password'=>$password];
			Mail::send('mail.userupdate',$messageData,function($message) use($email){
				$message->to($email)->subject('Updated details');
			});
			
			return back()->with('message','You have successfully user updated.');
		}
		return view('admin.users.user_update',compact('users','title'));
	}
	
	public function userDelete(Request $request,$id){
		$carrier = User::find($id)->delete();
		return redirect()->back()->with("success","Users record deleted !");
	}
	
	public function adminProfile(Request $request){
		$title = "Profile";
		$admin = Auth::guard('admin')->user();
		$admin_id = Auth::guard('admin')->user()->id;
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$admin = Admin::find($admin_id);
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

			]);
			
			if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$admin->pic = $filename;
			}
			
			$admin->name = $data['name'];
			$admin->email = $data['email'];
			$admin->mobile = $data['mobile'];
			$admin->save();
			return back()->with('message','You have successfully updated.');
			
		}
		
		return view('admin.profile_update',compact('admin','title'));
	}
	
	public function adminPassword(Request $request){
		$title = "password";
		$admin = Auth::guard('admin')->user();
		$id = Auth::guard('admin')->user()->id;
		
		if($request->isMethod('post')){
			$data = $request->all();
		
			$request->validate([
				'email' => 'required|email|exists:admins',
				'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
				'confirm_password' => 'min:6'
			]);
			
			if(!Hash::check($request['password'], Auth::guard('admin')->user()->password)) {
				  return back()->with('error','The old password does not match our records.');
			}
			$admin = Admin::find($id);
			$admin->password = bcrypt($data['new_password']);
			$admin->save();
			return back()->with('message','Your password updated.');
		}
		return view('admin.password_update',compact('admin','title'));
	}
	
	public function passwordReset(Request $request){
		$title = 'Forget Password';
		if($request->isMethod('post')){
			$data = $request->all();
			
			$email = $data['email'];
			
			$checkEmail = Admin::where('email',$email)->count();
			
			
			if($checkEmail >0){
				$admin = Admin::where('email',$email)->first();
				
				//Admin::where('email', $email)->update(['password' => $random_password]);

				$messageData = ['email'=>$data['email'],'name'=>$admin->name,'code'=>base64_encode($data['email'])];
				
				Mail::send('mail.confirmation',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				DB::table('admins')->where('email', $data['email'])->update(['status' =>1]);
				
				return redirect()->back()->with("success","Please check your email inbox !");
				
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('admin.password_reset')->with(['controller'=>'admin','title'=>$title]);
	}
	
	public function confirmEmail($email){
		$email = base64_decode($email);
		$userCount = Admin::where('email',$email)->count();
		
		if($userCount >0){
			$adminLinkstatus = Admin::where('email',$email)->first();
			if($adminLinkstatus->status ==0){
				return redirect('admin/password-reset')->with("success","Your given link expired");
			}else{
				
				return view('admin.password_reset_link')->with(['controller'=>'admin','email'=>$email]);
			}
		}
	}
	public function passwordResetLink(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			$password = bcrypt($data['password']);
			DB::table('admins')->where('email', $data['email'])->update(['password' => $password, 'status' =>0]);
			return redirect('admin/login')->with("message","Your password reset successfully!");
		}
	
	}
	
}
