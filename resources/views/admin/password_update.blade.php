@extends('layouts.layout')
@section('content') 

        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card container">
                <div class="card-body ">


      
        <h2>Change Password</h2>
		<!--
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		 -->

		@if(Session::has('message'))
		<p class="alert alert-info">{{ Session::get('message') }}</p>
		@endif
		
		@if(Session::has('error'))
		<p class="alert alert-danger">{{ Session::get('error') }}</p>
		@endif

      </div>
      <form action="{{route('admin.password')}}" method="post" id="carrierRegister" enctype="multipart/form-data">
	  @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="{{$admin->email}}" readonly>
			  
			 @if($errors->has('email'))
				<div class="text-danger">{{ $errors->first('email') }}</div>
			@endif
            </div>
          </div>
		  
		<div class="col-12">
            <div class="form-group">
              <label>Old Password</label>
              <input class="form-control" type="password" name="password" id="test-input">
			  
			  @if($errors->has('password'))
				<div class="text-danger">{{ $errors->first('password') }}</div>
			@endif
            </div>
        </div>
		
				<div class="col-12">
            <div class="form-group">
              <label>New Password</label>
              <input class="form-control" type="password" name="new_password" id="test-input">
			  
			  @if($errors->has('new_password'))
				<div class="text-danger">{{ $errors->first('new_password') }}</div>
			@endif
            </div>
        </div>
		
				<div class="col-12">
            <div class="form-group">
              <label>Confirm Password</label>
              <input class="form-control" type="password" name="confirm_password" id="test-input">
			  
			  @if($errors->has('confirm_password'))
				<div class="text-danger">{{ $errors->first('confirm_password') }}</div>
			@endif
            </div>
        </div>

          <div class="col-12">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6">
                <button class="default-btn register" type="submit">
                  <span>Update</span>
                </button>
              </div>
  
            </div>
          </div>
 
        </div>
      </form>
 


 </div>
  </div>
   </div>
  </div>
   </div>
      <!-- Register section end here -->
@endsection

<style>
span.error {
    color: red;
}
</style>
