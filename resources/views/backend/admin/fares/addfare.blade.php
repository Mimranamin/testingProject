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
               <h3 class="page-title">Add Fare</h3>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <form action="{{ route('fares.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
                <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Vehicle Category</label>
                            <select class="form-control select" name="veh_category_id">
                            <option value="">Select Vehicle Category</option>
                                @foreach ($final_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->veh_name }}, Passanger = {{ $category->max_passanger }}, Luggage = {{ $category->max_luggage }}</option>
                                @endforeach
                            </select>
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
                                        <tr>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Km</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="from[]" id="inlineFormInputGroup" placeholder="From (km)" min="1" max="100">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Km</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="to[]" id="to" placeholder="TO" min="1" max="100">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">€</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="price_per_km[]" id="price_per_km" placeholder="Price per Km" min="1" max="100">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="add_attr" class="btn btn-primary append_btn">+</button>
                    <button type="button" id="remove_attr" class="btn btn-primary append_btn">x</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a href="subcategories.html" class="btn btn-link">Cancel</a>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Add Fare</button>
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