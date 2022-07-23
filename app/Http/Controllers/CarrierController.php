<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
		
		$carrier = new Carrier;
		$carrier->name = $data['name'];
		$carrier->email = $data['email'];
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
		return view('carrier.dashboard');
	}
	
	public function carrierLogout(){
		Session::flush();
		return redirect('/carrier/login');
	}
	
	public function truck(){
	    
	    return view('carrier.truck');
	}
	
		public function addTruck(Request $request){
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
		
		$truck = new Truck;
		$truck->company_name = $data['company_name'];
		$truck->postal_address = $data['postal_address'];
		$truck->abn = $data['abn'];
		$truck->contact_number = $data['contact_number'];
		$truck->phone_number = $data['phone_number'];
		$truck->email = $data['email'];
		$truck->key_contact = $data['key_contact'];
		$truck->truck_type = $data['truck_type'];
		$truck->dry_reefer = $data['dry_reefer'];
		$truck->insurance_number = $data['insurance_number'];
		$truck->permit_type = $data['permit_type'];
		$truck->save();
		return redirect()->back()->with("success","Successfully form submitted!");
	}
}
