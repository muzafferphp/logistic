
@extends('Front.layouts.layout')
@section('content') 

<!-- login section start here -->
<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Reset</h2>
         <ul>
            <li>
               <a href="index.html">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Password Reset</li>
         </ul>
      </div>
   </div>
</div>
<section class="user-area-style ptb-100">
	<div class="container">
		<div class="contact-form-action">
			<div class="account-title">
				<h2>Password Reset</h2>
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
	<form action="{{route('admin.password.link')}}" method="post" id="carrierRegister" enctype="multipart/form-data">
	  @csrf
        <div class="row">
		  
		<div class="col-12">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="hidden" name="email" value="{{$email}}">
              <input class="form-control" type="password" name="password" id="test-input">
			  
			  @if($errors->has('password'))
				<div class="text-danger">{{ $errors->first('password') }}</div>
			@endif
            </div>
        </div>
		


          <div class="col-12">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6">
                <button class="default-btn register" type="submit">
                  <span>reset</span>
                </button>
              </div>
  
            </div>
          </div>
 
        </div>
      </form>
		</div>
	</div>
</section>
      <!-- login section end here -->
@endsection