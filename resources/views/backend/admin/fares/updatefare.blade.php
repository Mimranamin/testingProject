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
                <h3 class="page-title">Update Fare</h3>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('fares.update',$fare->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        @method('PUT')
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select" name="veh_category_id">
                            <option value="">Select Fare Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"  <?php if ($category['id'] == $fare->veh_category_id) echo 'selected'; ?>>{{ $category->veh_name }}, Passanger = {{ $category->max_passanger }}, Luggage = {{ $category->max_luggage }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h4>{{ $vehicle->veh_name }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Prices</label>
                        <div class="card bg-light">
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>From (km)	</th>
                                            <th>To (km)	</th>
                                            <th>Price per km	</th>
                                        </tr>
                                    </thead>
                                    <tbody id="add_pass_lag">
                                        <?php $froms = explode(',',$fare->from);
                                            $tos = explode(',',$fare->to);
                                            $prices = explode(',',$fare->price_per_km);
                                            $i=0; ?>
                                        @foreach ($froms as $key => $from)
                                        <tr class="appended_tr">
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Km</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="from[]" id="inlineFormInputGroup" placeholder="From (km)" min="1" max="100" value="{{ $froms[$key] }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Km</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="to[]" id="to" placeholder="TO" min="1" max="100" value="{{ $tos[$key] }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">€</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="price_per_km[]" id="price_per_km" placeholder="Price per Km" min="1" max="100" value="{{ $prices[$key] }}">
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="add_attr" class="btn btn-primary append_btn">+</button>
                    <button type="button" id="remove_attr" class="btn btn-primary append_btn">x</button>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary" type="submit">Update Fare</button>
                    <a href="" class="btn btn-link">Cancel</a>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>
@endsection