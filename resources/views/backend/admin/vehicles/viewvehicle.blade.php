@extends('backend.admin.main')
@section('content')
<div class="row">
   <div class="col-lg-8">
      <div class="card">
         <div class="card-body">
            <div class="service-header">
               <div class="service-inner">
                  <h4>Registration No. : {{ $vehicle->reg_no }}</h4>
                  <h4>Vehicle Make : {{ $vehicle->veh_make }}</h4>
                  <h4>Vehicle Model :{{ $vehicle->veh_model }}</h4>
                  <p>Vehicle Des :{{ $vehicle->veh_desc }}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection