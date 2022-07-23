
@extends('Front.layouts.layout')
@section('content') 

<!-- login section start here -->
<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Log In</h2>
         <ul>
            <li>
               <a href="index.html">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Log In</li>
         </ul>
      </div>
   </div>
</div>
<section class="user-area-style ptb-100">
	<div class="container">
		<div class="contact-form-action">
			<div class="account-title">
				<h2>Log in</h2>
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
				 

				 @if(Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
				@endif
		
			<form action="{{route('admin.login')}}" method="post" enctype="multipart/form-data" >
			  @csrf
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label>Email or Phone</label>
							<input class="form-control" type="email" name="email" required> 
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="password">
						</div>
					</div>
					<div class="col-12">
						<div class="login-action">
							<span class="log-rem">
								<input id="remember" type="checkbox">
								<label for="remember">Remember me!</label>
							</span>
							<span class="forgot-login">
								<a href="{{route('admin.password.reset')}}">Forgot your password?</a>
							</span>
						</div>
					</div>
					<div class="col-12">
						<button type="submit" class="default-btn" >
							<span>Log in now</span>
						</button>
					</div>
					<div class="col-12">
						<p>Have an account? <a href="{{route('admin.register')}}">Registration Now!</a></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
      <!-- login section end here -->
@endsection