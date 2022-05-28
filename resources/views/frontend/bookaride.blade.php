@extends('frontend.layouts.main')
@section('content')
<!doctype html>
<html lang="en">
<head>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-12">
		            <!--      Wizard container        -->
		            <div class="wizard-container" style="margin-bottom:50px;">
		                <div class="card wizard-card" data-color="purple" id="wizard">
			                <form action="" method="">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		List Your Place
		                        	</h3>
									<h5>This information will let us know more about your place.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Location</a></li>
			                            <li><a href="#type" data-toggle="tab">Type</a></li>
			                            <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
			                            <li><a href="#description" data-toggle="tab">Description</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
										<!-- Row -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group col-md-12">
													<label for="dep-date">Departure date and time</label>
													<input class="form-control" id="dep-date" placeholder="Enter Departure & Time"/>
												</div>
												<div class="form-group col-md-12">
													<label>Pick up location</label>
													<input class="form-control" id="from_places" placeholder="Enter From Location"/>
													<input id="origin" name="origin" required="" type="hidden"/>
												</div>
												<div class="form-group col-md-12">
													<label>Drop off location</label>
													<input class="form-control" id="to_places" placeholder="Enter To Location"/>
													<input id="destination" name="destination" required="" type="hidden"/>
												</div>
												<div class="form-group col-md-12">
													<label>Travel Type</label>
													<select class="form-control" id="" name="travel_type">
														<option value="one_way">One Way</option>
														<option value="two_way">Two Way</option>
													</select>
												</div>
												<div class="form-group col-md-12">
													<label>Travel Mode</label>
													<select class="form-control" id="travel_mode" name="travel_mode">
														<option value="DRIVING">Driving</option>
														<option value="WALKING">Foot</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="col-md-12">
													<div id="map" style="height: 400px; width: 500px" ></div>
													<div class="col-md-5 text-dark bg-white border border-dark text-center"><h5 id="in_kilo">Distance</h5></div>
													<div class="col-md-7 text-dark bg-white border border-dark text-center"><h5 id="duration_text">Time</h5></div>
												</div>
											</div>
										</div>
										
										<!-- Row -->
										<div class="row">
											<div class="col-md-6"></div>
											<div class="col-md-6">
												<div class="form-group right">
													<input class="btn large black" type="submit" value="Calculate"/>
												</div>
											</div>
										</div>
										<!-- //Row -->
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <h4 class="info-text">What type of location do you have? </h4>
		                                <div class="row">
											<div class="col-md-12">Form Wizard Two</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h4 class="info-text">Tell us more about facilities. </h4>
		                                <div class="row">
											<div class="col-md-12">Form Wizard Three</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description. </h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Place description</label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Example</label>
		                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>

@endsection