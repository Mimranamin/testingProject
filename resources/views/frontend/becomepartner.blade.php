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
					        <header class="f-title color">Become A Partner</header>
							<div class="row">
								<div class="col-md-6">
									<label for="name">Agency Form</label>
									<input type="radio" name="partners" value="agencyform"  />
								</div>
							<div class="col-md-6">
									<label for="company">Driver Form</label>
									<input type="radio" name="partners" value="driverform" />
								</div>
							</div>
							<div id="myRadioGroup">
								<div id="agencyform" class="desc">
									<fieldset>
					        		<header class="f-title color"><marquee><b>
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									* Agency Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</b></marquee></header>
										<div class="f-row">
											<div class="one-half">
												<label for="name">Name and surname</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Email</label>
												<input type="text" id="company">
											</div>
										</div>
										<div class="f-row">
											<div class="one-half">
												<label for="name">Enter Password</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Confirm Password</label>
												<input type="text" id="company">
											</div>
										</div>
										<div class="f-row">
											<div class="one-half">
												<label for="name">First Name</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Last Name</label>
												<input type="text" id="company">
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
											<div class="one-half">
												<label for="number">Mobile number</label>
												<input type="number" id="number" class="uniform-input number">
											</div>
										</div>
										<div class="f-row">
											<input type="submit" value="Save" id="submit1" name="submit" class="btn color medium">
										</div>
									</fieldset>
								</div>
								<div id="driverform" class="desc">
									<fieldset>
									<header class="f-title color"><marquee><b>
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										* Driver Form * &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</b></marquee></header>
										<div class="f-row">
											<div class="one-half">
												<label for="name">Name and surname</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Email</label>
												<input type="text" id="company">
											</div>
										</div>
										<div class="f-row">
											<div class="one-half">
												<label for="name">Enter Password</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Confirm Password</label>
												<input type="text" id="company">
											</div>
										</div>
										<div class="f-row">
											<div class="one-half">
												<label for="name">First Name</label>
												<input type="text" id="name">
											</div>
											<div class="one-half">
												<label for="company">Last Name</label>
												<input type="text" id="company">
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
											<div class="one-half">
												<label for="number">Mobile number</label>
												<input type="number" id="number" class="uniform-input number">
											</div>
										</div>
										<div class="f-row">
											<input type="submit" value="Save" id="submit1" name="submit" class="btn color medium">
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</article>
					<!-- //Tab -->
				</div>
				</div>
			</div>
		</div>
	</main>
@endsection