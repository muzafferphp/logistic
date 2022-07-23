
@extends('Front.layouts.layout')
@section('content') 

    <div class="page-title-area bg-8">
        <div class="container">
          <div class="page-title-content">
            <h2>Recover Password!</h2>
            <ul>
              <li>
                <a href="index.html"> Home </a>
              </li>
              <i class='bx bx-chevrons-right'></i>
              <li class="active">Recover Password!</li>
            </ul>
          </div>
        </div>
    </div>
    <section class="user-area-style recover-password-area ptb-100">
        <div class="container">
          <div class="contact-form-action recover">
            <div class="form-heading text-center">
              <h3 class="form-title">Reset Password!</h3>
              <p class="reset-desc">Enter the email of your account to reset the password. Then you will receive a link to email to reset the password. If you have any issue about reset password <a href="contact.html">contact us.</a>
              </p>
            </div>
			
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			 

			 @if(Session::has('success'))
			<p class="alert alert-info">{{ Session::get('success') }}</p>
			@endif
			
            <form method="post" action="{{route('carrier.password')}}">
			@csrf
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Enter Email Address">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <a class="now-log-in font-q" href="{{route('carrier.login')}}">Log in your account</a>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <p class="now-register"> Not a member? <a class="font-q" href="{{route('carrier.register')}}">Registration</a>
                  </p>
                </div>
                <div class="col-12 text-center">
                  <button class="default-btn rest_button" type="submit">
                    <span>Reset password</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
	  
@endsection