@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Truck Table</h4>
				  
				@if(session('success'))
					<div class="alert alert-info w-50">{{session('success')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
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
							<label class="badge badge-info"><a href="{{route('tuck.edit',$truck->id)}}">Edit</a></label> ||
							<label class="badge badge-danger"><a href="{{route('tuck.delete',$truck->id)}}">Delete</a></label>
						  </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
		</div>
	<!-- main-panel ends -->
	<style>
	label.badge.badge-info a {
		color: #fff;
	}
	label.badge.badge-danger a {
		color: #fff;
	}
	</style>
@endsection