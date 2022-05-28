@extends('backend.agent.main')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="row invoice layout-top-spacing layout-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        
        <div class="doc-container">

            <div class="row">
                <div class="col-xl-12">

                    <div class="invoice-content">
                        <div class="invoice-detail-body">
                            <form method="post" action="{{ route('vehicles.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                                <div class="invoice-detail-title">

                                    <div class="invoice-logo">
                                        <div class="upload">
                                            <input type="file" name="image" />
                                            <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                                            <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                                        </div>
                                    </div>
                                    
                                    <div class="invoice-title">
                                        <input type="text" class="form-control" placeholder="Invoice Label" value="Car Label">
                                    </div>

                                </div>

                                <div class="invoice-detail-header">

                                    <div class="row justify-content-between">
                                        <div class="col-xl-5 invoice-address-company">

                                            <div class="invoice-address-company-fields">

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">License</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="license" value="{{ $data->license }}" class="form-control form-control-sm" placeholder="License">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Color</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="color" value="{{ $data->color }}" class="form-control form-control-sm" placeholder="Color">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Luggage</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="luggage" value="{{ $data->luggage }}" class="form-control form-control-sm" placeholder="Luggagae Capacity">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="number" value="{{ $data->number }}" class="form-control form-control-sm" placeholder="Vehicle Number">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Status</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="status" value="{{ $data->status }}" class="form-control form-control-sm" placeholder="Vehicle Status">
                                                    </div>
                                                </div>                                                                
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-xl-5 invoice-address-company">

                                            <div class="invoice-address-company-fields">

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control form-control-sm" placeholder="Vehicl Name">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Modal</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="modal" value="{{ $data->modal }}" class="form-control form-control-sm" placeholder="Modal Name">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Passenger</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="passenger" value="{{ $data->passenger }}" class="form-control form-control-sm" placeholder="Passenger Capacity">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Type</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="type" value="{{ $data->type }}" class="form-control form-control-sm" placeholder="Vehicle Type">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="price" value="{{ $data->price }}" class="form-control form-control-sm" placeholder="Price Per Km">
                                                    </div>
                                                </div>                              
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            
            
        </div>

    </div>
</div>
@endsection