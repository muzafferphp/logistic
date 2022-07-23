
@extends('Front.layouts.layout')
@section('content') 

<section class="user-area-style ptb-100">
  <div class="container">
    <div class="contact-form-action">
      <div class="account-title">
        <h2>Registration</h2>
		
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		 

		 @if(Session::has('message'))
		<p class="alert alert-info">{{ Session::get('message') }}</p>
		@endif

      </div>
      <form action="{{route('user.register')}}" method="post" id="userRegister">
	  @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Full name</label>
              <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="{{old('email')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Mobile no.</label>
              <input class="form-control" type="tel" name="mobile" value="{{old('mobile')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="password" id="test-input" value="{{old('password')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6">
                <button class="default-btn register" type="submit">
                  <span>Register now</span>
                </button>
              </div>
              <div class="col-lg-6 col-sm-6 text-right">
                <input id="remember-1" type="checkbox">
                <label>Show password ?</label>
              </div>
            </div>
          </div>
          <div class="col-12">
            <p>Have an account? <a href="{{route('login')}}">Login now!</a>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
      <!-- Register section end here -->
@endsection

<style>
span.error {
    color: red;
}
</style>