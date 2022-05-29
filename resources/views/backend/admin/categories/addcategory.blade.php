@extends('backend.admin.main')
@section('content')
<div class="row">
<div class="col-xl-8 offset-xl-2">
    
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Add Category</h3>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                            <label>Category Image</label>
                            <input class="form-control" type="file" name="veh_image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Name</label>
                            <input class="form-control" type="text" name="veh_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Passenger Capacity</label>
                            <input class="form-control" type="text" name="max_passanger">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Suitcase Capacity</label>
                            <input class="form-control" type="text" name="max_luggage">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Vehicle Extras</label>
                        <div class="form-group">
                            <select id="category" name="veh_extra_id[]" multiple class="" >
                                @foreach ($extras as $extra)
                                    <option value="{{ $extra->id }}">{{ $extra->extra_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Add Category</button>
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