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
                        <h3 class="page-title">Categories</h3>
                     </div>
                     <div class="col-auto text-right">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                        <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary add-button ml-3">
                        <i class="fas fa-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="card filter-card" id="filter_inputs">
                  <div class="card-body pb-0">
                     <form action="#" method="post">
                        <div class="row filter-row">
                           <div class="col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Category</label>
                                 <select class="form-control select">
                                    <option>Select category</option>
                                    <option>Automobile</option>
                                    <option>Construction</option>
                                    <option>Interior</option>
                                    <option>Cleaning</option>
                                    <option>Electrical</option>
                                    <option>Carpentry</option>
                                    <option>Computer</option>
                                 </select>
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
                     </form>
                  </div>
               </div>
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
                                       <th>Passenger</th>
                                       <th>Luggage</th>
                                       <th>Date</th>
                                       <th class="text-end">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                       <td>{{ ++$i }}</td>
                                       <td>
                                          <a href="category/show">
                                          <img class="rounded service-img mr-1" src="image/{{ $category->veh_image }}" alt=""> {{ $category->veh_name }}
                                          </a>
                                       </td>
                                        <td>{{ $category->max_passanger }}</td>
                                        <td>{{ $category->max_luggage }}</td>
                                       <td>
                                          <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                             <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                                             <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                             @csrf
                                            @method('DELETE')
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
@endsection