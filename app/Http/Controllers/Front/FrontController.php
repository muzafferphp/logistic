<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck;

class FrontController extends Controller
{
    public function index(){
	
	$truecklist = Truck::get();
	$truecklist = json_decode(json_encode($truecklist));
	
    return view('Front.welcome',compact('truecklist'));
	
	}
}
