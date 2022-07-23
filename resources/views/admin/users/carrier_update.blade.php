
@extends('layouts.layout')
@section('content')  


        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card container">
                <div class="card-body ">


      
        <h2> Users Update</h2>
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

      </div>
      <form action="{{route('carrier.update',$usersCarrier->id)}}" method="post" id="carrierRegister">
	  @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Full name</label>
              <input class="form-control" type="text" name="name" value="{{$usersCarrier->name}}">
            </div>
			
			@if($errors->has('name'))
				<div class="text-danger">{{ $errors->first('name') }}</div>
			@endif
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="{{$usersCarrier->email}}">
			  
			 @if($errors->has('email'))
				<div class="text-danger">{{ $errors->first('email') }}</div>
			@endif
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Mobile no.</label>
              <input class="form-control" type="tel" name="mobile" value="{{$usersCarrier->mobile}}">
			  
			 @if($errors->has('mobile'))
				<div class="text-danger">{{ $errors->first('mobile') }}</div>
			@endif
            </div>
          </div>
		  
		<div class="col-12">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="password" id="test-input" value="{{$usersCarrier->password}}">
			  
			  @if($errors->has('password'))
				<div class="text-danger">{{ $errors->first('password') }}</div>
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
