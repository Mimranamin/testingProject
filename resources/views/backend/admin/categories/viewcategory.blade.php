@extends('backend.admin.main')
@section('content')
<div class="row">
   <div class="col-lg-8">
      <div class="card">
         <div class="card-body">
            <div class="service-header">
               <div class="service-inner">
                  <h2>{{ $category->veh_name }}</h2>
               </div>
            </div>
            <div class="service-description">
               <div class="service-images service-carousel">
                  <div class="images-carousel owl-carousel owl-theme owl-loaded owl-drag">
                     <div class="owl-stage-outer">
                        <div class="owl-stage" style="transition: all 0s ease 0s; width: 1870px; transform: translate3d(0px, 0px, 0px);">
                           <div class="owl-item active center" style="width: 603.328px; margin-right: 20px;">
                              <div class="item">
                                 <img src="../image/{{ $category->veh_image }}" alt="" class="img-fluid">
                              </div>
                           </div>
                           <div class="owl-item" style="width: 603.328px; margin-right: 20px;">
                              <div class="item">
                                 <img src="../image/{{ $category->veh_image }}" alt="" class="img-fluid">
                              </div>
                           </div>
                           <div class="owl-item" style="width: 603.328px; margin-right: 20px;">
                              <div class="item">
                                 <img src="../image/{{ $category->veh_image }}" alt="" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                     <!-- <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div> -->
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-6">
                     <div class="service-cate">
                        <a href="javascript:void(0);">Max Passenger = {{ $category->max_passanger }}</a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="service-cate">
                        <a href="javascript:void(0);">Max Luggage = {{ $category->max_luggage }}</a>
                     </div>
                  </div>
               </div>
               <hr>
               <h4 class="card-title">Service Details</h4>
               <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection