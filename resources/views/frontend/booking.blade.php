@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<header class="f-title color">Customer Details</header>
					<div class="row">
						<div class="col-md-6">
							<label for="name">Name</label>
							<input type="text" name="name">
						</div>
						<div class="col-md-6">
							<label for="company">Email</label>
							<input type="text" name="email">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="number">Phone number</label>
							<input type="number" id="number" class="uniform-input number">
						</div>
						<div class="col-md-6">
							<label for="email">Address</label>
							<input type="email" name="address">
						</div>
					</div>
					
					<header class="f-title color">Ride Details</header>
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<label for="dep-date">Date</label>
									<input type="text" name="dep-date" class="hasDatepicker">
								</div>
								<div class="col-md-4">
									<label for="dep-date">Time</label>
									<input type="text" name="dep-time">
								</div>
								<div class="col-md-4">
									<label for="vehicle">Select Vehicle type</label>
									<select id="vehicle">
										<option selected="">Private car</option>
										<option>Private minivan</option>
										<option>Private coach</option>
										<option>Shared minivan</option>
										<option>Shared coach</option>
										<option>Private limousine</option>
										<option>Private helicopter</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="dep-date">From</label>
									<input type="text" name="pick_loc">
								</div>
								<div class="col-md-4">
									<label for="dep-date">To</label>
									<input type="text" name="drop_loc">
								</div>
								<div class="col-md-4">
									<label for="vehicle">Journey Type</label>
									<select id="vehicle">
										<option selected="">One Way</option>
										<option>New Return</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="dep-date">Initial Value</label>
									<input type="text" name="initial_value">
								</div>
								<div class="col-md-6">
									<label for="dep-date">Rate</label>
									<input type="text" name="rate">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<header class="f-title color">Distance Matrix</header>
							<table class="hover">
								<tbody>
									<tr>
										<th>Distance in Miles</th>
										<td></td>
									</tr>
									<tr>
										<th>Distance in Kilometer</th>
										<td></td>
									</tr>
									<tr>
										<th>Duration (Hours)</th>
										<td></td>
									</tr>
									<tr>
										<th>Duration (Seconds)</th>
										<td></td>
									</tr>
									<tr>
										<th>Route</th>
										<td></td>
									</tr>
									<tr>
										<th>Fare</th>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="row">
					<header class="f-title color">Booking Extra</header>
						<!-- <div class="col-md-6">
							<label for="dep-date">Child Seat</label>
							<input type="text" name="child_seat">
						</div>
						<div class="col-md-6">
							<label for="dep-date">Package</label>
							<input type="text" name="package">
						</div> -->
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="actions">
								<a href="#" class="btn medium color right">Submit request</a>
							</div>
						</div>
					</div>
					<!-- form start -->
				</div>
			</div>
		</div>
	</main>
@endsection