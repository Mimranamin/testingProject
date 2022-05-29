@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
                <div class="content">
					<!-- Tab -->
					<article class="single" id="tab1">
						<div class="box">
					        <header class="f-title color">Register Driver</header>
							<fieldset>
								<div class="f-row">
									<div class="one-half">
										<label for="name">Name and surname</label>
										<input type="text" id="name">
									</div>
									<div class="one-half">
										<label for="company">Driving License</label>
										<input type="text" id="company">
									</div>
								</div>
								<div class="f-row">
									<div class="one-half">
										<label for="email">Email address</label>
										<input type="email" id="email">
									</div>
									<div class="one-half">
										<label for="number">Mobile number</label>
										<input type="number" id="number">
									</div>
								</div>
								<div class="f-row">
									<div class="one-half">
										<label for="city">City</label>
										<input type="text" id="city">
									</div>
									<div class="one-half">
										<label for="country">Country</label>
										<input type="text" id="country">
									</div>
								</div>
								<div class="f-row">
									<div class="one-half">
										<label for="address">Street address</label>
										<input type="text" id="address">
									</div>
								</div>
                                <header class="f-title color">Driver Contract Information</header>
							    <div class="f-row">
									<div class="one-half">
										<label for="username">Booking Commission</label>
										<input type="text" id="username" placeholder="Commission in %">
									</div>
									<div class="one-half">
										<label for="password1">Vehicle Name</label>
										<input type="password" id="password1">
									</div>
								</div>
							    <div class="f-row">
									<div class="one-half">
										<label for="username">Vehicle Modal</label>
										<input type="text" id="username">
									</div>
									<div class="one-half">
										<label for="password1">Availability</label>
										<input type="password" id="password1">
									</div>
								</div>
							    <div class="f-row">
									<div class="one-half">
										<label for="password1">Vehicle Passenger Capacity</label>
										<input type="password" id="password1">
									</div>
									<div class="one-half">
										<label for="password1">Vehicle Luggage Capacity</label>
										<input type="password" id="password1">
									</div>
								</div>
								<div class="f-row">
									<input type="submit" value="Save" id="submit1" name="submit" class="btn color medium">
								</div>
							</fieldset>
						</div>
					</article>
					<!-- //Tab -->
				</div>
				</div>
			</div>
		</div>
	</main>
@endsection