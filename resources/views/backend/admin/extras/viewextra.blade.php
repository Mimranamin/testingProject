@extends('backend.admin.main')
@section('content')
<div class="row">
   <div class="col-lg-8">
      <div class="card">
         <div class="card-body">
            <div class="service-header">
               <div class="service-inner">
                  <h4>{{ $extra->extra_name }}</h4>
                  <h4>{{ $extra->extra_type }}</h4> 
                  <h4>{{ $extra->extra_price }}</h4> 
                  <h4>{{ $extra->extra_category }}</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection