<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<br>

<div class="row">
    <div class="col-md-6">
		
		<h4>Register Form</h4>
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Register
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
			<button class="dropdown-item" type="button"><a href="{{route('admin.register')}}">Admin Register </a></button>
			<button class="dropdown-item" type="button"><a href="{{route('carrier.register')}}">Carrier Register </a></button>
			<button class="dropdown-item" type="button"><a href="{{route('user.register')}}">Users Register </a></button>
		  </div>
		</div>
	
	</div>
    <div class="col-md-6">
		
		 <h4>Users Login</h4>
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Login
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
			<button class="dropdown-item" type="button"><a href="{{route('admin.login')}}">Admin Login </a></button>
			<button class="dropdown-item" type="button"><a href="{{route('carrier.login')}}">Carrier Login </a></button>
			<button class="dropdown-item" type="button"><a href="{{route('login')}}">Users Login </a></button>
		  </div>
		</div>
	</div>
</div>
</div>

<br>
<br>
<br>
<div class="container">
  <h2>Truck List</h2>
  <table class="table">
    <thead>
      <tr>
		<th>Company</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Truck type</th>
		<th>Insurance</th>
		<th>Permit type</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	@foreach($truecklist as $truck)
	  
		<tr>
		  <td>{{$truck->company_name}}</td>
		  <td>{{$truck->postal_address}}</td>
		  <td>{{$truck->contact_number}}</td>
		  <td>{{$truck->phone_number}}</td>
		  <td>{{$truck->email}}</td>
		  <td>{{$truck->truck_type}}</td>
		  <td>{{$truck->insurance_number}}</td>
		  <td>{{$truck->permit_type}}</td>
		  <td>
			<label class="badge badge-info"><a href="{{route('tuck.view',$truck->id)}}">View</a></label> 
		  </td>
		</tr>
	@endforeach

    </tbody>
  </table>
</div>


	<style>
	label.badge.badge-info a {
		color: #fff;
	}
	label.badge.badge-danger a {
		color: #fff;
	}
	</style>
</body>
</html>
