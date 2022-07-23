<?php

namespace App\Http\Controllers\Carrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Truck;
class FronttruckController extends Controller
{

	public function truckList(){
		$truecklist = Truck::get();
		return view('Front.truck_list',compact('truecklist'));
	}
	
	
    public function truckView($id){
		$truck = Truck::find($id);
		return view('Front.truck',compact('truck'));
	}
}
