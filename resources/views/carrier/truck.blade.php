@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add truck</h4>
                  <form class="form-sample" method="post" action="{{route('add.tuck')}}">
				  @csrf
				  
				@if(session('success'))
					<div class="alert alert-info">{{session('success')}}</div>
				@endif
                    <p class="card-description">
                      Details info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        
						@if($errors->has('company_name'))
						<div class="error text-danger">{{ $errors->first('company_name') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Company name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
						@if($errors->has('postal_address'))
						<div class="text-danger">{{ $errors->first('postal_address') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postal Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="postal_address" name="postal_address" placeholder="Postal Address">
                          </div>
                        </div>
                      </div>
                    </div>
					
                    <div class="row">
                      <div class="col-md-6">
                       
						@if($errors->has('abn'))
						<div class="text-danger">{{ $errors->first('abn') }}</div>
						@endif
						 <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ABN </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="abn" name="abn" placeholder="ABN">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                       
						@if($errors->has('contact_number'))
						<div class="text-danger">{{ $errors->first('contact_number') }}</div>
					    @endif
						 <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Company name">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        
						@if($errors->has('phone_number'))
						<div class="text-danger">{{ $errors->first('phone_number') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Company name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
						@if($errors->has('email'))
						<div class="text-danger">{{ $errors->first('email') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                        </div>
                      </div>
                    </div>
					
					<div class="row">
                      <div class="col-md-6">
                       
						@if($errors->has('key_contact'))
						<div class="text-danger">{{ $errors->first('key_contact') }}</div>
						@endif
						 <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Key contact</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="key_contact" name="key_contact" placeholder="Key contact">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
						@if($errors->has('truck_type'))
						<div class="text-danger">{{ $errors->first('truck_type') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Type of Truck</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="truck_type" name="truck_type" placeholder="Type of Truck">
                          </div>
                        </div>
                      </div>
                    </div>
					
					
                    <div class="row">
                      <div class="col-md-6">
                      
						@if($errors->has('dry_reefer'))
						<div class="text-danger">{{ $errors->first('dry_reefer') }}</div>
						@endif
						  <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Dry or reefer</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="dry_reefer" name="dry_reefer" placeholder="Dry or reefer">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
						@if($errors->has('insurance_number'))
						<div class="error text-danger">{{ $errors->first('insurance_number') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Insurance number</label>
                          <div class="col-sm-9">
						   <input type="text" class="form-control" id="insurance_number" name="insurance_number" placeholder="Insurance number">
                          </div>
                        </div>
                      </div>
                    </div>
					
					 <div class="row">
                     
                      <div class="col-md-6">
                        
						@if($errors->has('permit_type'))
						<div class="error text-danger">{{ $errors->first('permit_type') }}</div>
						@endif
						<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Type of permit</label>
                          <div class="col-sm-9">
						   <input type="text" class="form-control" id="permit_type" name="permit_type" placeholder="Type of permit">
                          </div>
                        </div>
                      </div>
					  
					   <div class="col-md-6">
                        <div class="form-group row">
                          
                          <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
					
					
                  </form>
                </div>
              </div>
            </div>
			
			
			
		</div>
	
	<!-- main-panel ends -->
@endsection