@extends('backend.admin.main')
@section('content')
<div class="row">
   <div class="col-lg-8">
      <div class="card">
         <div class="card-body">
            <div class="service-header">
               <div class="service-inner">
                  <h4>Registration No. : {{ $fare->veh_category_id }}</h4>
                  <h4>Fare From : {{ $fare->from }}</h4>
                  <h4>Fare To : {{ $fare->to }}</h4>
                  <p>Fare Price : {{ $fare->price_per_km }}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection