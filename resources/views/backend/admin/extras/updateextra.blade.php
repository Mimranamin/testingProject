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
                <h3 class="page-title">Update Extra</h3>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('extras.update',$extra->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        @method('PUT')
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Type</label>
                            <input class="form-control" type="text" name="extra_type" placeholder="Enter Extra Type" value="{{ $extra->extra_type }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Name</label>
                            <input class="form-control" type="text" name="extra_name" placeholder="Enter Extra Name" value="{{ $extra->extra_name }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Price</label>
                            <input class="form-control" type="text" name="extra_price" placeholder="Enter Extra Price" value="{{ $extra->extra_price }}">
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Extra Category</label>
                            <select class="form-control select" name="extra_category">
                                <option value="">Select Extra Category</option>
                                <option value="per_person" <?php if ($extra->extra_category == 'per_person') echo 'selected'; ?>>Per Person</option>
                                <option value="whole" <?php if ($extra->extra_category == 'whole') echo 'selected'; ?>>Whole</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Update Extra</button>
                    <a href="" class="btn btn-link">Cancel</a>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>
@endsection