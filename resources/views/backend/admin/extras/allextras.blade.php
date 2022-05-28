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
                        <h3 class="page-title">Extras</h3>
                     </div>
                     <div class="col-auto text-right">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('extras.create') }}" class="btn btn-primary add-button ml-3">
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
                                 <label>Extra</label>
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
                                       <th>Extra Name</th>
                                       <th>Extra Type</th>
                                       <th>Extra Price</th>
                                       <th>Extra Category</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>   
                                    @foreach ($extras as $extra)
                                    <tr>
                                       <td>{{ ++$i }}</td>
                                       <td>
                                          <a href="extra/show">
                                             {{ $extra->extra_name }}
                                          </a>
                                       </td>
                                       
                                       <td>{{ $extra->extra_type }}</td> 
                                       <td>{{ $extra->extra_price }}</td> 
                                       <td>{{ $extra->extra_category }}</td>
                                       <td>
                                          <form action="{{ route('extras.destroy',$extra->id) }}" method="POST">
                                             <a class="btn btn-info" href="{{ route('extras.show',$extra->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('extras.edit',$extra->id) }}">Edit</a>
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