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
               <h3 class="page-title">Add Extra</h3>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <form action="{{ route('extras.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Type</label>
                            <input class="form-control" type="text" name="extra_type" placeholder="Enter Extra Type">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Name</label>
                            <input class="form-control" type="text" name="extra_name" placeholder="Enter Extra Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Price</label>
                            <input class="form-control" type="text" name="extra_price" placeholder="Enter Extra Price">
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Extra Category</label>
                            <select class="form-control select" name="extra_category">
                                <option value="">Select Extra Category</option>
                                <option value="per_person">Per Person</option>
                                <option value="whole">Whole</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="subcategories.html" class="btn btn-link">Cancel</a>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Add Extra</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
   </div>
</div>

      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Morris Charts JavaScript -->
      <script src="js/plugins/morris/raphael.min.js"></script>
      <script src="js/plugins/morris/morris.min.js"></script>
      <script src="js/plugins/morris/morris-data.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection