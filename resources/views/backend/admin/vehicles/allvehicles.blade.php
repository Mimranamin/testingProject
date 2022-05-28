@extends('backend.admin.main')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                
               <div class="page-header">
                  <div class="row">
                     <div class="col">
                        <h3 class="page-title">Vehicles</h3>
                     </div>
                     <div class="col-auto text-right">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('vehicles.create') }}" class="btn btn-primary add-button ml-3">
                            <i class="fas fa-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <form action="#" method="post" id="filter_inputs">
                  <div class="card filter-card">
                     <div class="card-body pb-0">
                        <div class="row filter-row">
                           <div class="col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Vehicle</label>
                                 <input class="form-control" type="text">
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>From Date</label>
                                 <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>To Date</label>
                                 <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <div class="form-group">
                                 <button class="btn btn-primary btn-block" type="submit">Submit</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Vehicle</th>
                                       <th>Registration No.</th>
                                       <th>Model</th>
                                       <th>Make</th>
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody> 
                                    <?php $i=0; ?> 
                                    @foreach ($vehicles as $vehicle)
                                    <tr>
                                       <td>{{ ++$i }}</td>
                                       <td>
                                          <a href="vehicle/show">
                                          <img class="rounded service-img mr-1" src="image/{{ $vehicle->veh_image }}" alt=""> {{ $vehicle->veh_name }}
                                          </a>
                                       </td>
                                    
                                       <td>{{ $vehicle->reg_no }}</td>
                                        <td>{{ $vehicle->veh_model }}</td>
                                        <td>{{ $vehicle->veh_make }}</td>
                                        <td>{{ $vehicle->created_at }}</td>
                                       <td>
                                          <div class="status-toggle">
                                             <input id="service_1" class="check" type="checkbox">
                                             <label for="service_1" class="checktoggle">checkbox</label>
                                             <!-- <input id="service_2" class="check" type="checkbox" checked="">
                                             <label for="service_2" class="checktoggle">checkbox</label> -->
                                          </div>
                                       </td>
                                       <td>
                                          <!-- <a href="vehicle/show"><i class="far fa-eye text-info mr-1"></i></a>
                                          <a href="vehicle/edit"><i class="far fa-edit bg-success-light mr-1"></i></a>
                                          <a href="vehicle/delete"><i class="far fa-eye text-danger mr-1"></i></a> -->
                                          <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">
                                             <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Edit</a>
                                             @method('DELETE')
                                             @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                       </td>
                                    </tr>
                                 </tbody>
                                    @endforeach
                                </table>
                            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
@endsection