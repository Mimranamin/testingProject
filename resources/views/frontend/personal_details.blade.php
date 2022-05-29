@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<form role="form" action="{{ action('SimpleController@booking_summary') }}" id="" method="GET">
					<header class="f-title color">Contact information</header>
					<div class="row">
						<div class="col-md-6">
							<label for="company">First Name</label>
							<input type="text" name="first_name">
						</div>
						<div class="col-md-6">
							<label for="number">Last Name</label>
							<input type="text" name="last_name">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="number">Email</label>
							<input type="email" name="email">
						</div>
						<div class="col-md-6">
							<label for="email">Phone</label>
							<input type="email" name="phone">
						</div>
					</div>
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="number">Comments</label>
							<input type="text" name="comments">
						</div>
					</div>
					<header class="f-title color">BILLING ADDRESS</header>
					<!-- form start -->
					<div class="row">
						<div class="col-md-6">
							<label for="number">COMPANY REGISTERED NAME </label>
							<input type="email" name="company_registered_name">
						</div>
						<div class="col-md-6">
							<label for="email">TAX NUMBER </label>
							<input type="email" name="tax_number">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="number">STREET</label>
							<input type="email" name="street">
						</div>
						<div class="col-md-4">
							<label for="email">STREET NUMBER </label>
							<input type="email" name="street_number">
						</div>
						<div class="col-md-4">
							<label for="number">CITY</label>
							<input type="email" name="city">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="email">STATE</label>
							<input type="email" name="state">
						</div>
						<div class="col-md-4">
							<label for="number">POSTAL CODE</label>
							<input type="email" name="postal_code">
						</div>
						<div class="col-md-4">
							<label for="email">COUNTRY</label>
							<input type="email" name="country">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="actions">
                                    <input class="btn large grey right" type="submit" value="Submit"/>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection