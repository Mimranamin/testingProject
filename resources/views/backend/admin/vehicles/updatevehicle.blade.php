@extends('backend.admin.main')
@section('content')

<div class="row">
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
<div class="col-xl-8 offset-xl-2">
    
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Update Vehicle</h3>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vehicles.update',$vehicle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select" name="veh_category_id">
                            <option value="">Select Vehicle Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"  <?php if ($category['id'] == $vehicle->veh_category_id) echo 'selected'; ?>>{{ $category->veh_name }}, Passanger = {{ $category->max_passanger }}, Luggage = {{ $category->max_luggage }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Registration Number</label>
                            <input class="form-control" type="text" name="reg_no" value="{{ $vehicle->reg_no }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Make</label>
                            <input class="form-control" type="text" name="veh_make" value="{{ $vehicle->veh_make }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Model</label>
                            <input class="form-control" type="text" name="veh_model" value="{{ $vehicle->veh_model }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                                <textarea class="form-control col-xs-12" name="veh_desc">{{ $vehicle->veh_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Update Vehicle</button>
                    <a href="" class="btn btn-link">Cancel</a>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>
@endsection