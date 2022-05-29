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
                <h3 class="page-title">Update Category</h3>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" name="veh_image" class="form-control" placeholder="image">
                            <img src="../../image/{{ $category->veh_image }}" width="300px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Name</label>
                            <input class="form-control" type="text" name="veh_name" value="{{ $category->veh_name }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Passenger Capacity</label>
                            <input class="form-control" type="text" name="max_passanger" value="{{ $category->max_passanger }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Suitcase Capacity</label>
                            <input class="form-control" type="text" name="max_luggage" value="{{ $category->max_luggage }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Vehicle Extras</label>
                            <select id="category" name="veh_extra_id[]" multiple class="">
                                @foreach ($selected_extras as $key => $selected_extra)
                                        <option value="{{ $selected_extra->id }}" selected>{{ $selected_extra->extra_name }}</option>
                                @endforeach
                                @foreach ($unselected_extras as $unselected_extra)
                                <option value="{{ $unselected_extra->id }}">{{ $unselected_extra->extra_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Update Category</button>
                    <a href="categories.html" class="btn btn-link">Cancel</a>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>
<style>
    .btn-group{
        width:100%
    }
</style>
@endsection