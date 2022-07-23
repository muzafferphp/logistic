@extends('Front.layouts.layout')
@section('content') 

<div class="jumbotron text-center">
  <h1>Truck info details</h1>
  <p>Company : {{$truck->company_name}}</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <p>Address : {{$truck->postal_address}}</p>
      <p>ABN : {{$truck->abn}}</p>
      <p>Contact : {{$truck->contact_number}}</p>
      <p>Date : {{$truck->created_at}}</p>
    </div>
    <div class="col-sm-4">
		<p>Phone : {{$truck->phone_number}}</p>
		<p>Email : {{$truck->email}}</p>
		<p>Key Contact : {{$truck->key_contact}}</p>
    </div>
    <div class="col-sm-4">
		<p>Truck type : {{$truck->truck_type}}</p>
        <p>Dry reefer : {{$truck->dry_reefer}}</p>
        <p>Insurance : {{$truck->insurance_number}}</p>
        <p>Permit type : {{$truck->permit_type}}</p>
    </div>
  </div>
</div>

@endsection
