<?php

namespace App\Http\Controllers\Carrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TruckStore;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Carrier;
use App\Models\Truck;

class CarrierController extends Controller
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
		
		$carrier = new Carrier;
		$carrier->name = $data['name'];
		$carrier->email = $data['email'];
		$carrier->mobile = $data['mobile'];
		$carrier->password = bcrypt($data['password']);
		$carrier->save();
        return back()->with('message','You have successfully register.');
		}
	
		return view('carrier.register');
	}
	
	public function login(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			
			if(Auth::guard('carrier')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/carrier/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
		
		return view('carrier.login');
	}
	
	public function carrierdashboard(Request $request){
		$title = 'Carrier || Dashboard';
		return view('carrier.dashboard')->with(['controller'=>'carrier','title'=>$title]);
	}
	
	public function carrierLogout(){
		Session::flush();
		return redirect('/carrier/login');
	}
	
	public function truck(){
		$title = 'Carrier || Truck';
	    return view('carrier.truck')->with(['controller'=>'carrier','title'=>$title]);
	}
	
	public function addTruck(TruckStore $request){
		$data = $request->all();
		
		$truck = new Truck;
		$truck->company_name = $data['company_name'];
		$truck->postal_address = $data['postal_address'];
		$truck->abn = $data['abn'];
		$truck->contact_number = $data['contact_number'];
		$truck->phone_number = $data['phone_number'];
		$truck->email = $data['email'];
		$truck->key_contact = $data['key_contact'];
		$truck->user_id = Auth::guard('carrier')->user()->id;
		$truck->user_role = "carrier";
		$truck->truck_type = $data['truck_type'];
		$truck->dry_reefer = $data['dry_reefer'];
		$truck->insurance_number = $data['insurance_number'];
		$truck->permit_type = $data['permit_type'];
		$truck->save();
		return redirect()->back()->with("success","Successfully form submitted!");
	}
	
	public function truckList(){ 
		$truecklist = Truck::where('user_id', Auth::guard('carrier')->user()->id)->get();
		$truecklist = json_decode(json_encode($truecklist));
		$title = 'Truck list';
		return view('carrier.truck_list',compact('truecklist', 'title'));
	}
	
	public function truckEdit(Request $request,$id){
		$trueckEdit = Truck::find($id);
		
		if($request->isMethod('post')){
		$data = $request->all();
			
		$validated = $request->validate([
			'company_name' => 'required',
			'postal_address' => 'required',
			'abn' => 'required',
			'contact_number' => 'required',
			'phone_number' => 'required',
			'email' => 'required',
			'key_contact' => 'required',
			'truck_type' => 'required',
			'dry_reefer' => 'required',
			'insurance_number' => 'required',
			'permit_type' => 'required',
		]);
		
		$trueckEdit->company_name = $data['company_name'];
		$trueckEdit->postal_address = $data['postal_address'];
		$trueckEdit->abn = $data['abn'];
		$trueckEdit->contact_number = $data['contact_number'];
		$trueckEdit->phone_number = $data['phone_number'];
		$trueckEdit->email = $data['email'];
		$trueckEdit->key_contact = $data['key_contact'];
		$trueckEdit->truck_type = $data['truck_type'];
		$trueckEdit->dry_reefer = $data['dry_reefer'];
		$trueckEdit->insurance_number = $data['insurance_number'];
		$trueckEdit->permit_type = $data['permit_type'];
		$trueckEdit->save();
		return redirect()->back()->with("success","Successfully updated !");
		}
		return view('carrier.truck_edit',compact('trueckEdit'));
	}
	
	public function truckDelete($id){
		$truck=Truck::find($id)->delete();
		return redirect()->back()->with("success","Truck record deleted !");
	}
	
	public function passwordForget(Request $request){
	
		$title = 'Forget Password';
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$password = Str::random(8);
			$random_password = Hash::make($password);
			
			$email = $data['email'];
			
			$checkEmail = Carrier::where('email',$email)->count();
			
			
			if($checkEmail >0){
				$carrier = Carrier::where('email',$email)->first();
				
				Carrier::where('email', $email)->update(['password' => $random_password]);
				$messageData = ['email'=>$data['email'],'name'=>$carrier->name,'password'=>$password];
				
				Mail::send('mail.forgetpassword',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				return redirect()->back()->with("success","Changed your password check your email !");
			
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('carrier.password')->with(['controller'=>'carrier','title'=>$title]);
	}
	
	public function profileUpdate(Request $request){
	
		$title = 'Profile Update';
		$carrier_id =  Auth::guard('carrier')->user()->id;
		$carrier_details = Carrier::find($carrier_id);
		
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
				$carrier_details->pic = $filename;
			}
			
			
			
			$carrier_details->name = $data['name'];
			$carrier_details->email = $data['email'];
			$carrier_details->mobile = $data['mobile'];
			$carrier_details->password = bcrypt($data['password']);
			$carrier_details->save();
			return back()->with('message','You have successfully updated.');
		}
		
		return view('carrier.profile_update')->with(['controller'=>'carrier','title'=>$title,'carrier_id'=>$carrier_id,'carrier_details'=>$carrier_details]);
		
	}
	
}
