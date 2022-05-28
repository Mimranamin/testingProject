@extends('backend.admin.main')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
   <div class="col-xl-8 offset-xl-2">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Add Driver</h3>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <form action="{{ route('drivers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Driver Name</label>
                            <input class="form-control" type="text" name="driver_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="subcategories.html" class="btn btn-link">Cancel</a>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Add Driver</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection