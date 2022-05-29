@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<header class="f-title color">My Account</header>
					<div class="row">
						<div class="col-md-6">
							<label for="name">User Name</label>
							<input type="text" name="user_name">
						</div>
						<div class="col-md-6">
							<label for="company">First Name</label>
							<input type="text" name="first_name">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="number">Last Name</label>
							<input type="text" name="last_name">
						</div>
						<div class="col-md-6">
							<label for="email">Address</label>
							<input type="email" name="address">
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
						<div class="col-md-6">
							<label for="number">Steuernummer</label>
							<input type="text" name="Steuernummer">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="actions">
								<a href="#" class="btn medium color right">Submit request</a>
							</div>
						</div>
					</div>
					<header class="f-title color">Commission</header>
					<!-- form start -->
				</div>
			</div>
		</div>
	</main>
@endsection