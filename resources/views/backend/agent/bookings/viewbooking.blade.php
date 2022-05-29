@extends('backend.agent.main')
@section('content')
<div class="row">
	<div class="col-md-12 mt-3 mb-3">
		<div align="right">
			<a href="{{ route('vehicles.index') }}" class="btn btn-default">Back</a>
		</div>
	</div>
</div>
<div class="fq-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-self-center order-md-0 order-1">
                                <h1 class="">{{ $data->name }}</h1>
                                <p class="">{{ $data->passenger }} Passengers & {{ $data->luggage }} Luggage Capacity.</p>
                            </div>
                            <div class="col-md-6 order-md-0 order-0">
                                <div class="banner-img">
									<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq container">

                    <div class="faq-layouting layout-spacing">


                        <div class="fq-comman-question-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Specification & Details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle License - {{ $data->license }}
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle Color - {{ $data->color }}
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle Price - {{ $data->price }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="">
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle Number - {{ $data->number }}
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle Status - {{ $data->status }}
                                                </li>
                                                <li class="list-unstyled">
                                                    <div class="icon-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                    Vehicle Modal - {{ $data->modal }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
@endsection