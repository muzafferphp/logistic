@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Carrier List</h4>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($usersCarrier as $carrier)
                        <tr>
                          <td>{{$carrier['name']}}</td>
                          <td>{{$carrier['email']}}</td>
                          <td>{{$carrier['mobile']}}</td>
                          <td>{{ date('d-m-Y', strtotime($carrier['created_at']))}}</td>
						   <td>
							<label class="badge badge-info"><a href="{{route('carrier.update',$carrier['id'])}}">Edit</a></label> |
							<label class="badge badge-danger"><a href="{{route('carrier.delete',$carrier['id'])}}">Delete</a></label>
						  </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
			
			
						<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User List</h4>
				  
				@if(session('success'))
					<div class="alert alert-info w-50">{{session('success')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($usersUser as $user)
                        <tr>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>{{$user['mobile']}}</td>
                          <td>{{ date('d-m-Y', strtotime($user['created_at']))}}</td>
						  <td>
							<label class="badge badge-info"><a href="{{route('user.update',$user['id'])}}">Edit</a></label> ||
							<label class="badge badge-danger"><a href="{{route('user.delete',$user['id'])}}">Delete</a></label>
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