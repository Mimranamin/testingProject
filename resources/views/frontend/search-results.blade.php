@extends('frontend.layouts.main')
@section('content')

<!-- Main -->
<main class="main" role="main">
	<div class="wrap mt-5">
		<div class="row">
			<div class="full-width content">
				<h2>Select transfer for your RETURN</h2>
				<h2>Select transfer for your RETURN</h2>
				
				<div class="results">
					@foreach ($filtered_categories as $category)
					<form role="form" action="{{ action('SimpleController@personal_details',$category->id) }}" id="{{ $category->id }}" method="GET">
						<!-- Item -->
						<article class="result">
							<div class="one-fourth heightfix" style="height: 202.219px;"><img src="image/{{ $category->veh_image }}" alt=""></div>
							<div class="one-half heightfix" style="height: 202.219px;">
								<h3> {{ $category->veh_name }} <a href="javascript:void(0)" class="trigger color" title="Extras">+</a></h3>
								<ul>
									<li>
										<span class="icon icon-themeenergy_user-3"></span>
										<p>Max <strong>{{ $category->max_passanger }} people</strong> <br>per vehicle</p>
									</li>
									<li>
										<span class="icon icon-themeenergy_travel-bag"></span>
										<p>Max <strong>{{ $category->max_luggage }} suitcases</strong> <br>per vehicle</p>
									</li>
									<li>
										<span class="icon icon-themeenergy_clock"></span>
										<p>Estimated time <br><strong>50 mins</strong></p>
									</li>
								</ul>
							</div>
							<div class="one-fourth heightfix" style="height: 202.219px;">
								<div>
									<div class="price"> @if($category->fare){{$category->fare->price_per_km}}@else 000 @endif <small>USD</small></div>
									<span class="meta">per passenger</span>
                                    <input class="btn large grey" type="submit" value="Select"/>
								</div>
							</div>
							<div class="full-width information" style="display: none;">	
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								@foreach ($category->extra as $extra)	
								<input type="checkbox" id="{{ $extra->id }}" name="extras[]" value="{{ $extra->id }}">
								<label>{{ $extra->extra_name }}</label><br>
								@endforeach
							</div>
						</article>
						<!-- //Item -->
                    </form>
						@endforeach
				</div>
			</div>
		</div>
	</main>
	<!-- //Main -->
	@endsection