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
                        <h3 class="page-title">Fares</h3>
                     </div>
                     <div class="col-auto text-right">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('fares.create') }}" class="btn btn-primary add-button ml-3">
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
                                 <label>Fare</label>
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
                                       <th>Category</th>
                                       <th>From</th>
                                       <th>To</th>
                                       <th>Price Per Km</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>   
                                    @foreach ($fares as $fare)
                                    <tr>
                                       <td>{{ ++$i }}</td>
                                       <td>
                                          <a href="fare/show">
                                             {{ $fare->veh_category_id }}
                                          </a>
                                       </td>
                                       
                                       <td>{{ $fare->from }}</td> 
                                       <td>{{ $fare->to }}</td>
                                        <td>{{ $fare->price_per_km }}</td>
                                       <td>
                                          <form action="{{ route('fares.destroy',$fare->id) }}" method="POST">
                                             <a class="btn btn-info" href="{{ route('fares.show',$fare->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('fares.edit',$fare->id) }}">Edit</a>
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